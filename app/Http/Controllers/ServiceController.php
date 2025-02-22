<?php
namespace App\Http\Controllers;
use App\Models\Tag;
use App\Models\Step;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\File;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\File as FileModel;

class ServiceController extends Controller
{
    public function edit($id) {
        $service = Service::getServiceInformation($id);
        // dd($service);
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $id) {
        // dd($request);
        $service = Service::findOrFail($id);

        $old_name = $service->name;
        // $request->input('name');
        // dd($old_name, $request->input('name'));

        // dd($request->input('steps'));
        // Оновлення основних полів
        $service->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'icon' => $request->input('icon'),
        ]);

        // Оновлення тегів
        if ($request->has('tags')) {
            $tags = $request->input('tags');
            $service->tags()->delete(); // Видаляємо старі теги
            foreach ($tags as $tagName) {
                if ($tagName){
                    $service->tags()->create(['name' => $tagName]);
                }
            }
        }

        if ($request->has('steps')) {
            $steps = array_filter($request->input('steps')); // Видаляємо порожні значення
            // dd($steps);
            $service->steps()->delete(); // Видаляємо старі кроки
            // dd($steps);

            foreach ($steps as $index => $stepText) {
                    $service->steps()->create([
                        'number' => $index + 1,
                        'text' => $stepText
                    ]);
            }
        }

        //rename or create a directory for files
        $old_name = sanitizeFileName($old_name);
        $new_name = sanitizeFileName($request->input('name'));
        
        if (Storage::disk('public')->exists($old_name)) {
            if ($old_name != $new_name){    
                Storage::disk('public')->move($old_name, $new_name);
            }
        } else {
            Storage::disk('public')->makeDirectory($new_name);
        }



        // deletion of files deleted by the user
        if ($request->has('delete_files')) {
            foreach ($request->input('delete_files') as $fileId) {
                $file = FileModel::findOrFail($fileId);
                $filePath = $new_name.'/'.sanitizeFileName($file->path);
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath);
                }
        
                $file->delete();
            }
        }

        // Adding new files
        if ($request->hasFile('new_files')) {
            foreach ($request->file('new_files') as $uploadedFile) {
                $path = $uploadedFile->storeAs($new_name, sanitizeFileName(($uploadedFile->getClientOriginalName())), 'public');
                $service->files()->create([
                    'path' => $uploadedFile->getClientOriginalName()
                ]);
            }
        }

        return redirect()->route('dashboard')->with('success', 'Service updated successfully');
    }

    public function serviceTemplate (Request $request) {
        return view('services.create');
    }
    public function create(Request $request) {
        // Validation of the request
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string',
            'tags' => 'nullable|array',
            'steps' => 'nullable|array',
            'new_files.*' => 'nullable|file|mimes:pdf,doc,docx|max:2048'
        ]);

        // Create a new service
        $service = Service::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'icon' => $request->input('icon')
        ]);

        // Adding tags
        if ($request->has('tags')) {
            foreach ($request->input('tags') as $tagName) {
                if (!empty($tagName)) {
                    $tag = Tag::firstOrCreate(
                        ['name' => $tagName, 'service_id' => $service->id] // Включаємо service_id
                    );
                }
            }
        }

        // Adding steps
        if ($request->has('steps')) {
            foreach ($request->input('steps') as $index => $stepText) {
                if (!empty($stepText)) {
                    Step::create([
                        'service_id' => $service->id,
                        'number' => $index + 1,
                        'text' => $stepText
                    ]);
                }
            }
        }


        
        $new_name = sanitizeFileName($request->input('name'));

        if (!Storage::disk('public')->exists($new_name)) {
            Storage::disk('public')->makeDirectory($new_name);
        }

        // Adding files
        if ($request->hasFile('new_files')) {
            foreach ($request->file('new_files') as $uploadedFile) {
                $path = $uploadedFile->storeAs($new_name, sanitizeFileName(($uploadedFile->getClientOriginalName())), 'public');
                $service->files()->create([
                    'service_id' => $service->id,
                    'path' => $uploadedFile->getClientOriginalName()
                ]);
            }
        }
    
        return redirect()->route('dashboard')->with('success', 'Service created successfully');
    }
}

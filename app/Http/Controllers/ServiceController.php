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

function sanitizeFileName($name, $id = null) {
    $name = strtolower($name);
    $name = str_replace(' ', '_', $name);
    $name = preg_replace('/[^a-z0-9_\-]/', '', $name);
    return $id ? $name . "_" . $id : $name;
}


class ServiceController extends Controller
{
    public function edit($id) {
        $service = Service::getServiceInformation($id);
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $id) {
        $service = Service::findOrFail($id);

        $old_dir_name = sanitizeFileName($service->name, $id);

        $service->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'icon' => $request->input('icon'),
        ]);

        // Update tags
        if ($request->has('tags')) {
            $tags = $request->input('tags');
            $service->tags()->delete(); // Delete old tags
            foreach ($tags as $tagName) {
                if ($tagName){
                    $service->tags()->create(['name' => $tagName]);
                }
            }
        }

        if ($request->has('steps')) {
            $steps = array_filter($request->input('steps')); // Remove empty values
            $service->steps()->delete(); // Delete old steps

            foreach ($steps as $index => $stepText) {
                    $service->steps()->create([
                        'number' => $index + 1,
                        'text' => $stepText
                    ]);
            }
        }

        //rename or create a directory for files
        $new_dir_name = sanitizeFileName($request->input('name'), $id);
        
        if (Storage::disk('public')->exists($old_dir_name)) {
            if ($old_dir_name != $new_dir_name){    
                Storage::disk('public')->move($old_dir_name, $new_dir_name);
            }
        } else {
            Storage::disk('public')->makeDirectory($new_dir_name);
        }
        unset($old_dir_name);

        // deletion of files deleted by the user
        if ($request->has('delete_files')) {
            foreach ($request->input('delete_files') as $fileId) {
                $file = FileModel::findOrFail($fileId);
                $filePath = $new_dir_name.'/'.sanitizeFileName($file->path);
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath);
                }
        
                $file->delete();
            }
        }

        // Adding new files
        if ($request->hasFile('new_files')) {
            foreach ($request->file('new_files') as $uploadedFile) {
                $fileName = sanitizeFileName(($uploadedFile->getClientOriginalName()));
                // We handle the possibility of overwriting a file in the case when the user wants to add a file with a name that has already been used
                $fileNameDump = $fileName;
                $i = 1;
                while (Storage::disk('public')->exists($new_dir_name."/".$fileName)) {
                    $fileInfo = pathinfo($fileNameDump);
                    $fileName = $fileInfo['filename'].'('.$i.')'.$fileInfo['extension'];
                    $i++;
                }

                $path = $uploadedFile->storeAs($new_dir_name, $fileName, 'public');

                $service->files()->create([
                    'path' => $fileName
                ]);
            }
        }

        return redirect()->route('dashboard')->with('success', 'Service updated successfully');
    }

    public function serviceTemplate (Request $request) {
        return view('services.create');
    }

    public function create (Request $request) {
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
                        ['name' => $tagName, 'service_id' => $service->id]
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

        $dir_name = sanitizeFileName($request->input('name'), $service->id);

        if (!Storage::disk('public')->exists($dir_name)) {
            Storage::disk('public')->makeDirectory($dir_name);
        }

        // Adding files
        if ($request->hasFile('new_files')) {
            foreach ($request->file('new_files') as $uploadedFile) {
                $fileName = sanitizeFileName(($uploadedFile->getClientOriginalName()));
                // We handle the possibility of overwriting a file in the case when the user wants to add a file with a name that has already been used
                $fileNameDump = $fileName;
                $i = 1;
                while (Storage::disk('public')->exists($dir_name."/".$fileName)) {
                    $fileInfo = pathinfo($fileNameDump);
                    $fileName = $fileInfo['filename'].'('.$i.')'.$fileInfo['extension'];
                    $i++;
                }
                
                $path = $uploadedFile->storeAs($dir_name, $fileName, 'public');
                $service->files()->create([
                    'service_id' => $service->id,
                    'path' => $fileName
                ]);
            }
        }
    
        return redirect()->route('dashboard')->with('success', 'Service created successfully');
    }

    public function delete(Request $request, $id) {
        $service = Service::findOrFail($id);
        
        Storage::disk('public')->deleteDirectory(sanitizeFileName($service->name, $id));

        $service->tags()->delete();
        $service->steps()->delete();
        $service->files()->delete();
        $service->delete();
    
        return redirect()->route('dashboard')->with('success', 'Service deleted successfully');
    }
    
}

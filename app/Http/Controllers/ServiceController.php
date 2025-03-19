<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Step;
use App\Models\Necessity;
use App\Models\Information;
use Illuminate\Support\Facades\Storage;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\File as FileModel;

class ServiceController extends Controller
{
    public function serviceTemplate (Request $request) {
        return view('services.create');
    }

    public function edit($id) {
        $service = Service::getServiceInformation($id);
        return view('services.edit', compact('service'));
    }

    public function update(Request $request, $id) {
        $service = Service::findOrFail($id);

        $old_dir_name = $this->sanitizeFileName($service->name, $id);

        // Update the service details
        $service->update([
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'icon' => $request->input('icon'),
        ]);

        // Update tags
        if ($request->has('tags')) {
            $service->tags()->delete();
            foreach ($request->input('tags') as $tagName) {
                if (!empty($tagName)) {
                    $service->tags()->create(['name' => $tagName]);
                }
            }
        }

        // Update steps
        if ($request->has('steps')) {
            $service->steps()->delete();
            foreach ($request->input('steps') as $index => $stepText) {
                if (!empty($stepText)) {
                    $service->steps()->create([
                        'number' => $index + 1,
                        'text' => $stepText
                    ]);
                }
            }
        }

        if ($request->has('necessities')) {
            $service->necessities()->delete();
            foreach ($request->input('necessities') as $necessityText) {
                if (!empty($necessityText)) {
                    $service->necessities()->create(['text' => $necessityText]);
                }
            }
        }

        if ($request->has('information')) {
            $service->information()->delete();
            foreach ($request->input('information') as $infoText) {
                if (!empty($infoText)) {
                    $service->information()->create(['text' => $infoText]);
                }
            }
        }

        $new_dir_name = $this->sanitizeFileName($request->input('name'), $id);
        if (Storage::disk('public')->exists($old_dir_name)) {
            if ($old_dir_name !== $new_dir_name) {    
                Storage::disk('public')->move($old_dir_name, $new_dir_name);
            }
        } else {
            Storage::disk('public')->makeDirectory($new_dir_name);
        }

        // Delete files removed by user
        if ($request->has('delete_files')) {
            foreach ($request->input('delete_files') as $fileId) {
                $file = FileModel::findOrFail($fileId);
                $filePath = $new_dir_name . '/' . $this->sanitizeFileName($file->path);
                if (Storage::disk('public')->exists($filePath)) {
                    Storage::disk('public')->delete($filePath);
                }
                $file->delete();
            }
        }

        // Add new files
        if ($request->hasFile('new_files')) {
            foreach ($request->file('new_files') as $uploadedFile) {
                $fileName = $this->sanitizeFileName($uploadedFile->getClientOriginalName());
                $fileInfo = pathinfo($fileName);
                $fileExtension = isset($fileInfo['extension']) ? '.' . $fileInfo['extension'] : '';

                $fileNameDump = $fileInfo['filename'];
                $i = 1;

                while (Storage::disk('public')->exists("$new_dir_name/$fileName")) {
                    $fileName = $fileNameDump . "($i)" . $fileExtension;
                    $i++;
                }

                $path = $uploadedFile->storeAs($new_dir_name, $fileName, 'public');
                $service->files()->create(['path' => "$new_dir_name/$fileName"]);
            }
        }

        return redirect()->route('dashboard')->with('success', 'Service updated successfully');
    }


    public function create(Request $request) {
        $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'name' => 'required|string|max:255',
            'tags' => 'nullable|array',
            'description' => 'nullable|string',
            'steps' => 'nullable|array',
            'necessities' => 'nullable|array',
            'new_files.*' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'information' => 'nullable|array',
            'icon' => 'nullable|string',
        ]);

        $service = Service::create([
            'category_id' => $request->input('category_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'icon' => $request->input('icon'),
        ]);

        if ($request->has('tags')) {
            foreach ($request->input('tags') as $tagName) {
                if (!empty($tagName)) {
                    Tag::create([
                        'name' => $tagName,
                        'service_id' => $service->id,
                    ]);
                }
            }
        }

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

        if ($request->has('necessities')) {
            foreach ($request->input('necessities') as $necessityText) {
                if (!empty($necessityText)) {
                    Necessity::create([
                        'service_id' => $service->id,
                        'text' => $necessityText
                    ]);
                }
            }
        }

        if ($request->has('information')) {
            foreach ($request->input('information') as $infoText) {
                if (!empty($infoText)) {
                    Information::create([
                        'service_id' => $service->id,
                        'text' => $infoText
                    ]);
                }
            }
        }

        $dir_name = $this->sanitizeFileName($request->input('name'), $service->id);
        if (!Storage::disk('public')->exists($dir_name)) {
            Storage::disk('public')->makeDirectory($dir_name);
        }

        if ($request->hasFile('new_files')) {
            foreach ($request->file('new_files') as $uploadedFile) {
                $fileName = $this->sanitizeFileName($uploadedFile->getClientOriginalName());
                $fileInfo = pathinfo($fileName);
                $fileExtension = isset($fileInfo['extension']) ? '.' . $fileInfo['extension'] : '';

                $fileNameDump = $fileInfo['filename'];
                $i = 1;

                while (Storage::disk('public')->exists("$dir_name/$fileName")) {
                    $fileName = $fileNameDump . "($i)" . $fileExtension;
                    $i++;
                }

                $path = $uploadedFile->storeAs($dir_name, $fileName, 'public');
                FileModel::create([
                    'service_id' => $service->id,
                    'path' => "$dir_name/$fileName"
                ]);
            }
        }

        return redirect()->route('dashboard')->with('success', 'Služba bola úspešne vytvorená.');
    }

    public function delete(Request $request, $id) {
        $service = Service::findOrFail($id);
        Storage::disk('public')->deleteDirectory($this->sanitizeFileName($service->name, $id));

        $service->tags()->delete();
        $service->steps()->delete();
        $service->files()->delete();
        $service->necessities()->delete();
        $service->information()->delete();
        $service->delete();

        return redirect()->route('dashboard')->with('success', 'Service deleted successfully');
    }

    private function sanitizeFileName($name, $id = null) {
        $name = strtolower(trim($name));
        $name = preg_replace('/[^a-z0-9.\-_]/', '_', $name);
        $name = preg_replace('/_+/', '_', $name);
        return $id ? $name . "_" . $id : $name;
    }


    public function deleteFile(Request $request)
    {
        $file = FileModel::findOrFail($request->input('file_id'));

        // Delete file from storage
        if (Storage::disk('public')->exists($file->path)) {
            Storage::disk('public')->delete($file->path);
        }

        // Remove from database
        $file->delete();

        return response()->json(['success' => true]);
    }
}

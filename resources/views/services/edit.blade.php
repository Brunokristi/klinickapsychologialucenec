<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing the service</title>
</head>
<body>
    <h2>Editing the service: {{ $service->name }}</h2>

    <form action="{{ route('service.update', ['id' => $service->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label for="name">Service name:</label>
        <br>
        <input type="text" name="name" value="{{ $service->name }}" required>
        <br>

        <label for="description">Description:</label>
        <br>
        <textarea name="description">{{ $service->description }}</textarea>
        <br>
        
        <label for="icon">Icons (URL):</label>
        <br>
        <input type="text" name="icon" value="{{ $service->icon }}">
        <br>

    
        <h2>Tags</h2>
        <ul>
            @foreach($service->tags as $tag)
                <!-- /*<input type="text" name="name" value="{{ $tag->name }}" required>*/ -->
                <input type="text" name="tags[]" value="{{ $tag->name }}">
                <!-- /*<input type="text" name="tags[]" value="{{ $tag->name }}" required>*/ -->
                <br>
            @endforeach
            <input type="text" name="tags[]" placeholder="New tag">
        </ul>

        <h2>Steps</h2>
        <ol>
            @foreach($service->steps as $step)
            {{ $step->number }}: <input type="text" name="steps[]" value="{{ $step->text }}">
                <br>
            @endforeach
            {{ ($service->steps->count() ?? 0) + 1 }}: <input type="text" name="steps[]" placeholder="New step">
        </ol>
        <h2>Files</h2>
        <ul>
            @foreach($service->files as $file)
                <li>
                    <input type="checkbox" name="delete_files[]" value="{{ $file->id }}"> Delete    
                    <a href="{{ asset('storage/' . sanitizeFileName($service->name, $service->id) . '/' . sanitizeFileName($file->path)) }}" target="_blank">
                        {{ $file->path }}
                    </a>
                </li>
            @endforeach
        </ul>
        
        <label for="files"> Add new files:</label>
        <input type="file" name="new_files[]" multiple accept=".pdf,.doc,.docx">
        <button type="submit">Save</button>
        <br>
        <button type="button" onclick="window.location='{{ route('dashboard') }}'">Back</button>
    </form>
    <form action="{{ route('service.delete', ['id' => $service->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this service?');">
            @csrf
            @method('DELETE')
            <button type="submit">Delete Service</button>
    </form>
</body>
</html>

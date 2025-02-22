<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Service</title>
</head>
<body>
    <h2>Create New Service</h2>

    <form action="{{ route('service.create') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="name">Service name:</label>
        <br>
        <input type="text" name="name" required>
        <br>

        <label for="description">Description:</label>
        <br>
        <textarea name="description"></textarea>
        <br>
        
        <label for="icon">Icon:</label>
        <br>
        <input type="text" name="icon">
        <br>

        <h2>Tags</h2>
        <ul>
            <input type="text" name="tags[]" placeholder="Tag 1">
            <br>
            <input type="text" name="tags[]" placeholder="Tag 2">
        </ul>

        <h2>Steps</h2>
        <ol>
            <input type="text" name="steps[]" placeholder="Step 1">
            <br>
            <input type="text" name="steps[]" placeholder="Step 2">
        </ol>

        <h2>Files</h2>
        <label for="files"> Add files:</label>
        <input type="file" name="new_files[]" multiple accept=".pdf,.doc,.docx">
        <br>

        <button type="submit">Create</button>
        <br>
        <button type="button" onclick="window.location='{{ route('dashboard') }}'">Back</button>
    </form>
</body>
</html>

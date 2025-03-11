@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div class="container">
        <h1>Editing the service: {{ $service->name }}</h1>

        <form action="{{ route('service.update', ['id' => $service->id]) }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            @method('PUT')

            <label for="name">Úprava služby:</label>
            <input type="text" name="name" required value="{{ $service->name }}">

            <label for="description">Opis:</label>
            <textarea name="description" required>{{ $service->description }}</textarea>

            <label for="icon">Ikona:</label>
            <input type="text" name="icon" required value="{{ $service->icon }}">

            <h2>Tagy</h2>
            <ul id="tags-container">
                @foreach($service->tags as $tag)
                    <li>
                        <input type="text" name="tags[]" value="{{ $tag->name }}">
                    </li>
                @endforeach
                <li><input type="text" name="tags[]" placeholder="New tag"></li>
            </ul>
            <button type="button" class="outlined add-button" onclick="addInput('tags-container', 'tags[]')">Pridať tag</button>

            <h2>Kroky</h2>
            <ol id="steps-container">
                @foreach($service->steps as $step)
                    <li>
                        {{ $step->number }}: <input type="text" name="steps[]" value="{{ $step->text }}">
                    </li>
                @endforeach
                <li>{{ ($service->steps->count() ?? 0) + 1 }}: <input type="text" name="steps[]" placeholder="New step"></li>
            </ol>
            <button type="button" class="outlined add-button" onclick="addInput('steps-container', 'steps[]')">Pridať krok</button>

            <h2>Súbory</h2>
            <ul>
                @foreach($service->files as $file)
                    <li>
                        <input type="checkbox" name="delete_files[]" value="{{ $file->id }}"> Delete    
                        <a href="{{ asset('storage/' . $file->path) }}" target="_blank">
                            {{ $file->path }}
                        </a>
                    </li>
                @endforeach
            </ul>
            
            <label for="files">Pridať nové súbory:</label>
            <input type="file" name="new_files[]" multiple accept=".pdf,.doc,.docx">

            <button type="submit">Uložiť</button>
        </form>

        <form class="form" action="{{ route('service.delete', ['id' => $service->id]) }}" method="POST" onsubmit="return confirm('Naozaj vymazať?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete">Vymazať</button>
        </form>

        <a class="text" href="{{ route('dashboard') }}"> < späť na admin panel</a>
    </div>
@endsection

@section('styles')
<style>

    .container {
        padding-top: 10%;
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 700px;
        margin: 20px auto;
        background-color: #fff;
        font-family: 'Inter', sans-serif;
    }

    .container h1 {
        font-family: 'Karma', sans-serif;
        font-size: 1.8rem;
        font-weight: 300;
        color: #B4D39C;
        padding: 0;
        margin-bottom: 30px;
    }

    .form {
        display: flex;
        flex-direction: column;
        gap: 15px;
        width: 100%;
        max-width: 500px;
    }

    .form label {
        font-size: 16px;
        font-weight: 600;
        color: #B4D39C;
    }

    .form h2 {
        font-size: 16px;
        font-weight: 600;
        color: #B4D39C;
    }

    .form input,
    .form textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #B4D39C;
        border-radius: 30px;
        font-size: 16px;
        outline: none;
        transition: border-color 0.3s ease-in-out;
    }

    .form ul, .form ol {
        list-style-type: none;
        padding: 0;
        margin-bottom: 10px;
    }

    .form ul li, .form ol li {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .form button {
        background-color: #B4D39C;
        color: white;
        border: none;
        font-size: 16px;
        font-weight: 300;
        border-radius: 30px;
        cursor: pointer;
        padding: 10px;
        width: 100%;
        transition: background-color 0.3s;
    }

    .form .outlined {
        background-color: #fff;
        color: #B4D39C;
        border: 1px solid #B4D39C;
        font-size: 14px;
        padding: 5px 10px;
        border-radius: 30px;
        cursor: pointer;
        width: 100%;
    }

    .form .add-button {
        width: 200px;
    }

    .form .delete {
        background-color: #d9534f;
        color: white;
        border: none;
        padding: 10px;
        font-size: 16px;
        font-weight: bold;
        border-radius: 30px;
        cursor: pointer;
        margin-top: 20px;
        min-width: 100%;
    }

    .delete:hover {
        background-color: #c9302c;
    }

    .text {
        color: #B4D39C;
        text-decoration: none;
        font-size: 16px;
        margin-top: 20px;
    }

</style>
@endsection

@section('scripts')
<script>
    function addInput(containerId, inputName) {
        const container = document.getElementById(containerId);
        const newInput = document.createElement("li");
        newInput.innerHTML = `<input type="text" name="${inputName}" placeholder="New ${inputName.replace('[]', '')}">`;
        
        container.appendChild(newInput);
    }
</script>
@endsection

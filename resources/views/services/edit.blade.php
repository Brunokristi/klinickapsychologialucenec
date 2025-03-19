@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div class="container">
        <h1>Služba: {{ $service->name }}</h1>

        <form action="{{ route('service.update', ['id' => $service->id]) }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf
            @method('PUT')

            <label for="category">Kategória</label>
            <select name="category_id" required>
                <option value="">Vyberte kategóriu</option>
                <option value="1" {{ $service->category_id == 1 ? 'selected' : '' }}>Dopravná psychológia</option>
                <option value="2" {{ $service->category_id == 2 ? 'selected' : '' }}>ONLINE terapia a poradenstvo</option>
                <option value="3" {{ $service->category_id == 3 ? 'selected' : '' }}>Terapeutická a konzultačná činnosť pre rodičov, deti a adolescentov</option>
                <option value="4" {{ $service->category_id == 4 ? 'selected' : '' }}>Posúdenie psychickej spôsobilosti</option>
                <option value="5" {{ $service->category_id == 5 ? 'selected' : '' }}>Psychodiagnostické vyšetrenie detí a dospelých</option>
                <option value="6" {{ $service->category_id == 6 ? 'selected' : '' }}>HRV Biofeedback</option>
                <option value="7" {{ $service->category_id == 7 ? 'selected' : '' }}>Neuro-psychologická rehabilitácia COGNI PLUS Tréning</option>
            </select>

            <label for="name">Názov služby</label>
            <input type="text" name="name" required value="{{ $service->name }}">

            <label for="tags">Tagy</label>
            <ul id="tags-container">
                @foreach($service->tags as $tag)
                    <li>
                        <input type="text" name="tags[]" value="{{ $tag->name }}">
                        <button type="button" class="delete-button" onclick="removeInput(this)">❌</button>
                    </li>
                @endforeach
                <li>
                    <input type="text" name="tags[]">
                    <button type="button" class="delete-button" onclick="removeInput(this)">❌</button>
                </li>
            </ul>
            <button type="button" class="add-button" onclick="addInput('tags-container', 'tags[]')">Pridať tag</button>

            <label for="description">Popis</label>
            <textarea name="description" rows="10" required>{{ $service->description }}</textarea>

            <label for="steps">Priebeh</label>
            <ul id="steps-container">
                @foreach($service->steps as $index => $step)
                    <li>
                        <input type="text" name="steps[]" value="{{ $step->text }}">
                        <button type="button" class="delete-button" onclick="removeInput(this)">❌</button>
                    </li>
                @endforeach
                <li>
                    <input type="text" name="steps[]">
                    <button type="button" class="delete-button" onclick="removeInput(this)">❌</button>
                </li>
            </ul>
            <button type="button" class="add-button" onclick="addInput('steps-container', 'steps[]')">Pridať krok</button>

            <label for="necessities">Čo si priniesť</label>
            <ul id="necessities-container">
                @foreach($service->necessities as $necessity)
                    <li>
                        <input type="text" name="necessities[]" value="{{ $necessity->text }}">
                        <button type="button" class="delete-button" onclick="removeInput(this)">❌</button>
                    </li>
                @endforeach
                <li>
                    <input type="text" name="necessities[]">
                    <button type="button" class="delete-button" onclick="removeInput(this)">❌</button>
                </li>
            </ul>
            <button type="button" class="add-button" onclick="addInput('necessities-container', 'necessities[]')">Pridať položku</button>

            <label for="files">Súbory</label>
            <ul id="files-container">
                @foreach($service->files as $file)
                    <li id="file-{{ $file->id }}">
                        <a href="{{ Storage::url($file->path) }}" target="_blank">{{ $file->path }}</a>
                        <button type="button" class="delete-button" onclick="deleteFile({{ $file->id }})">❌</button>
                    </li>
                @endforeach
            </ul>

            <label for="new_files">Pridať nové súbory</label>
            <input type="file" name="new_files[]" multiple accept=".pdf,.doc,.docx">

            <label for="information">Dôležité informácie</label>
            <ul id="information-container">
                @foreach($service->information as $information)
                    <li>
                        <input type="text" name="information[]" value="{{ $information->text }}">
                        <button type="button" class="delete-button" onclick="removeInput(this)">❌</button>
                    </li>
                @endforeach
                <li>
                    <input type="text" name="information[]">
                    <button type="button" class="delete-button" onclick="removeInput(this)">❌</button>
                </li>
            </ul>
            <button type="button" class="add-button" onclick="addInput('information-container', 'information[]')">Pridať informáciu</button>

            <label for="icon">Ikona</label>
            <input type="text" name="icon" required value="{{ $service->icon }}">

            <button type="submit">Uložiť</button>
        </form>

        <form class="form" action="{{ route('service.delete', ['id' => $service->id]) }}" method="POST" onsubmit="return confirm('Naozaj vymazať?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="delete" style="background-color: red">Vymazať</button>
        </form>

        <a class="text" href="{{ route('dashboard') }}">späť na admin panel</a>
    </div>
@endsection

@section('styles')
<style>
    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 700px;
        margin: 20px auto;
        background-color: #fff;
        font-family: 'Inter', sans-serif;
        font-size: 1.8rem;
        font-weight: 300;
        padding-top: 50px;
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
    .form textarea,
    .form select {
        width: 100%;
        padding: 10px;
        border: 1px solid #B4D39C;
        border-radius: 30px;
        font-size: 16px;
        outline: none;
        transition: border-color 0.3s ease-in-out;
    }

    form ul {
        list-style-type: none;
        padding: 0;
        margin-bottom: 10px;
    }

    .form ul li {
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        display: flex;
        justify-content: space-between;
    }

    .form ul li input {
        flex: 1;
    }

    .form span {
        color: #d9534f;
        font-size: 14px;
        margin-top: 5px;
    }

    .form a {
        color: #BEE5F5;
        font-size: 16px;
        margin-top: 20px;
        text-align: center;
    }

    .form button {
        background-color: #B4D39C;
        color: white;
        border: none;
        font-size: 16px;
        font-weight: 300;
        border-radius: 30px;
        cursor: pointer;
        padding: 5px 10px;
        width: 100%;
        transition: background-color 0.3s;
    }

    .form button[type="submit"] {
        margin-bottom: 20px;
    }

    .form .delete-button {
        background-color: white;
        color: white;
        border: none;
        font-size: 16px;
        font-weight: 300;
        border-radius: 30px;
        cursor: pointer;
        width: 30px;
        height: 30px;
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

    .text {
        color: #B4D39C;
        text-decoration: none;
        font-size: 16px;
        margin-top: 20px;
        text-align: center;
    }

</style>
@endsection

@section('scripts')
<script>
    function addInput(containerId, inputName) {
        const container = document.getElementById(containerId);
        const newInput = document.createElement("li");
        newInput.innerHTML = `<input type="text" name="${inputName}" placeholder="New ${inputName.replace('[]', '')}">
        <button type="button" class="delete-button" onclick="removeInput(this)">❌</button>`;
        
        container.appendChild(newInput);
    }

    function removeInput(button) {
        button.parentElement.remove();
    }

    function deleteFile(fileId) {
        if (!confirm("Naozaj chcete tento súbor odstrániť?")) return;

        fetch("{{ route('service.deleteFile') }}", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ file_id: fileId })
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                document.getElementById("file-" + fileId).remove();
            } else {
                alert("Chyba pri mazaní súboru!");
            }
        })
        .catch(error => {
            alert("Chyba pri komunikácii so serverom!");
            console.error(error);
        });
    }
</script>
@endsection

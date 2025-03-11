@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div class="container">
        <h1>Vytvoriť novú službu</h1>

        <form action="{{ route('service.create') }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf

            <label for="name">Názov služby:</label>
            <input type="text" name="name" required>
            @error('name') <span>{{ $message }}</span> @enderror

            <label for="description">Opis služby:</label>
            <textarea name="description" required></textarea>
            @error('description') <span>{{ $message }}</span> @enderror
            
            <label for="icon">Reprezentujúca ikona:</label>
            <input type="text" required name="icon">
            @error('icon') <span>{{ $message }}</span> @enderror

            <h2>Tagy</h2>
            <ul id="tags-container">
                <li><input type="text" name="tags[]"></li>
            </ul>
            <button type="button" class="add-button" onclick="addInput('tags-container', 'tags[]')">Pridať tag</button>

            <h2>Kroky</h2>
            <ul id="steps-container">
                <li><input type="text" name="steps[]"></li>
            </ul>
            <button type="button" class="add-button" onclick="addInput('steps-container', 'steps[]')">Pridať krok</button>

            <h2>Súbory</h2>
            <label for="files">Pridať súbory:</label>
            <input type="file" name="new_files[]" multiple accept=".pdf,.doc,.docx">
            @error('new_files') <span>{{ $message }}</span> @enderror

            <button type="submit">Vytvoriť</button>
            <a class="text" href="{{ route('dashboard') }}"> < späť na admin panel</a>
        </form>
    </div>
@endsection

@section('styles')
<style>

    .container {
        padding-top: 20%;
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
    }

    .form ul li input {
        flex: 1;
    }

    .form span {
        color: #d9534f;
        font-size: 14px;
        margin-top: 5px;
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

    .form textarea {
        height: 100px;
        resize: none;
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
        newInput.innerHTML = `<input type="text" name="${inputName}">`;
        
        container.appendChild(newInput);
    }
</script>
@endsection

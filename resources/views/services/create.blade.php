@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div class="container">
        <h1>Vytvoriť novú službu</h1>

        <form action="{{ route('service.create') }}" method="POST" enctype="multipart/form-data" class="form">
            @csrf

            <label for="category">Kategória</label>
            <select name="category_id" required>
                <option value="">Vyberte kategóriu</option>
                <option value="1">Dopravná psychológia</option>
                <option value="2">ONLINE terapia a poradenstvo</option>
                <option value="3">Terapeutická a konzultačná činnosť pre rodičov, deti a adolescentov</option>
                <option value="4">Posúdenie psychickej spôsobilosti</option>
                <option value="5">Psychodiagnostické vyšetrenie detí a dospelých</option>
                <option value="6">HRV Biofeedback</option>
                <option value="7">Neuro-psychologická rehabilitácia COGNI PLUS Tréning</option>
            </select>
            @error('category_id') 
                <span>{{ $message }}</span> 
            @enderror


            <label for="name">Názov služby</label>
            <input type="text" name="name" required>
            @error('name') <span>{{ $message }}</span> @enderror


            <h2>Tagy</h2>
            <ul id="tags-container">
                <li>
                    <input type="text" name="tags[]">
                </li>
            </ul>
            <button type="button" class="add-button" onclick="addInput('tags-container', 'tags[]')">Pridať tag</button>

            <label for="description">Popis</label>
            <textarea name="description" rows="10" required ></textarea>
            @error('description') <span>{{ $message }}</span> @enderror


            <h2>Priebeh</h2>
            <ul id="steps-container">
                <li>
                    <input type="text" name="steps[]">
                </li>
            </ul>
            <button type="button" class="add-button" onclick="addInput('steps-container', 'steps[]')">Pridať krok</button>


            <h2>Čo si priniesť</h2>
            <ul id="necessities-container">
                <li>
                    <input type="text" name="necessities[]">
                </li>
            </ul>
            <button type="button" class="add-button" onclick="addInput('necessities-container', 'necessities[]')">Pridať položku</button>
            

            <h2>Súbory</h2>
            <input type="file" name="new_files[]" multiple accept=".pdf,.doc,.docx">
            @error('new_files') <span>{{ $message }}</span> @enderror


            <h2>Dôležité informácie</h2>
            <ul id="information-container">
                <li>
                    <input type="text" name="information[]">
                </li>
            </ul>
            <button type="button" class="add-button" onclick="addInput('information-container', 'information[]')">Pridať informáciu</button>


            <label for="icon">Reprezentujúca ikona (svg)</label>
            <input type="text" required name="icon">
            @error('icon') <span>{{ $message }}</span> @enderror


            <button type="submit">Vytvoriť</button>
            <a class="text" href="{{ route('dashboard') }}">späť na admin panel</a>
        </form>
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

        newInput.innerHTML = `
            <input type="text" name="${inputName}">
            <button type="button" class="delete-button" onclick="removeInput(this)">❌</button>
        `;

        container.appendChild(newInput);
    }

    function removeInput(button) {
        button.parentElement.remove();
    }
</script>
@endsection

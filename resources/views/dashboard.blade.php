@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div class="container" style="padding-top: 90px;">
        <h1>Čaves, vitaj späť 👋</h1>
        
        <div class="button-container">
            <a class="button" href="{{ route('outgoings.show') }}">Pridať neprítomnosť</a>
            <a class="button" href="{{ route('service.create') }}">Pridať službu</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Názov služby</th>
                    <th>Akcia</th>
                </tr>
            </thead>
            <tbody>
                @foreach($services as $service)
                    <tr>
                        <td>{{ $service['name'] }}</td>
                        <td>
                            <a href="{{ route('service.edit', ['id' => $service['id']]) }}" class="edit-button">
                                Upraviť <i class="bi bi-arrow-right"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('styles')
<style>

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
        max-width: 800px;
        margin: auto;
    }

    .container h1 {
        font-family: 'Karma', sans-serif;
        font-size: 1.8rem;
        font-weight: 300;
        color: #B4D39C;
        padding: 0;
        margin-bottom: 30px;
        text-align: center;
    }

    .button-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-bottom: 20px;
        width: 100%;
        max-width: 500px;
    }

    .button {
        border: solid 1px #B4D39C;
        border-radius: 30px;
        color: #B4D39C;
        text-align: center;
        text-decoration: none;
        font-size: 16px;
        padding: 10px 20px;
        cursor: pointer;
        min-width: 200px;
        transition: background-color 0.3s ease-in-out;
    }

    .button:hover {
        background-color: #B4D39C;
        color: white;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        font-size: 16px;
        color: #333;
        margin-top: 20px;
        background-color: white;
        border-radius: 30px;
        overflow: hidden;
        max-width: 500px;
    }

    thead {
        background-color: #B4D39C;
        color: white;
        text-align: center;
    }

    th, td {
        padding: 12px;
        border-bottom: 1px solid #BEE5F5;
        font-weight: normal;
        text-align: center;
    }

    td {
        color: #B4d39c;
    }

    tbody tr:last-child td {
        border-bottom: none;
    }

    .edit-button {
        display: inline-block;
        padding: 5px 15px;
        color: #B4D39C;
        text-decoration: none;
    }

</style>
@endsection

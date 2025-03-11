@extends('layouts.app')

@section('title', 'Admin Panel')

@section('content')
    <div class="container" style="padding-top: 20%;">
        <h1>Spravovanie neprítomností</h1>

        @if(session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        <form action="{{route('outgoings.create')}}" method="POST" class="form">
            @csrf
            <div>
                <label class="block font-semibold">Dátum:</label>
                <input type="date" name="date" required>
                @error('date') <span>{{ $message }}</span> @enderror
            </div>

            <div>
                <label class="block font-semibold">Text neprítomnosti:</label>
                <input type="text" name="text" maxlength="100" required value="Neordinujeme, zastupuje nás MUDr. Janko Hraško na adrese: Mierová 1, 123 45 Bratislava">
            </div>

            <button type="submit">
                Pridať
            </button>
        </form>
    </div>


   <div class="container">
    <table>
        <thead>
            <tr>
                <th>Dátum</th>
                <th>Text</th>
                <th>Akcia</th>
            </tr>
        </thead>
        <tbody>
            @foreach($outgoings as $outgoing)
                <tr>
                    <td>{{ $outgoing->date }}</td>
                    <td>{{ $outgoing->text }}</td>
                    <td>
                        <form action="{{ route('outgoings.delete', ['id' => $outgoing->id]) }}" method="POST" onsubmit="return confirm('Naozaj vymazať?');">
                            @csrf
                            @method('DELETE')
                            <button class="delete" type="submit">Vymazať</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <a class="text" href="{{ route('dashboard') }}"> < späť na admin panel</a>
</div>
@endsection


@section('styles')
<style>

    .container {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .container h1 {
        font-family: 'Karma', sans-serif;
        font-size: 1.5rem;
        font-weight: 300;
        color: #B4D39C;
        padding: 0;
        margin-bottom: 50px;
    }

    .form {
        width: 100%;
        max-width: 500px;
        display: flex;
        flex-direction: column;
        gap: 15px;
        background-color: #fff;
        margin: 20px auto;
        font-family: 'Inter', sans-serif;
    }

    .form label {
        font-size: 16px;
        font-weight: š00;
        color: #B4D39C;
        margin-bottom: 5px;
    }

    .form input {
        width: 100%;
        padding: 10px;
        border: 1px solid #B4D39C;
        border-radius: 30px;
        font-size: 16px;
        outline: none;
    }

    .form input:focus {
        border-color: #B4D39C;
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
        min-width: 100px;
        padding: 10px;
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

    thead tr {
        background-color: #B4D39C;
        color: white;
        text-align: left;
    }

    th {
        padding: 12px;
    }

    td {
        padding: 10px;
        border-bottom: 2px solid #BEE5F5; /* Only bottom borders */
    }

    tbody tr:last-child td {
        border-bottom: none;
    }

    .delete {
        background-color: #d9534f;
        color: white;
        border: none;
        padding: 8px 12px;
        font-size: 14px;
        font-weight: bold;
        border-radius: 30px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .text {
        color: #B4D39C;
        text-decoration: none;
        font-size: 16px;
        margin-top: 20px;
    }

</style>
@endsection

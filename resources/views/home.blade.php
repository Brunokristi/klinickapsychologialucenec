@extends('layouts.app')

@section('title', 'Klinická a dopravná psychológia')

@section('content')
    <div class="landing">
        <h1>Doprajte si možnosť znovu objaviť Vašu vnútornú</h1>
        <span id="changing-text">slobodu</span>
        <img class="landing-image" src="{{ asset('images/landing.png') }}" alt="contacts"> 
        <a href="#" class="button">Chcem začať<i class="bi bi-arrow-right"></i></a>
        <p>Ambulancia klinickej a dopravnej psychológie v Lučenci</p>
    </div>
@endsection

@section('styles')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700&family=Karma:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        body {
            margin: 0;
        }
        
        .landing {
            display: flex;
            padding: 20px;
            background-color: #fff;
            flex-direction: column;
            align-items: center;
            padding-top: 30%;
        }

        .landing h1, p {
            font-family: 'Karma', sans-serif;
            font-size: 1.5rem;
            font-weight: 300;
            color: #B4D39C;
            text-align: center; 
            width: 80%;
            margin-bottom: 10px;
        }

        .landing p {
            font-size: 18px;
        }

        .landing .button {
            display: flex;
            padding: 10px;
            padding-left: 30%;
            font-size: 18px;
            font-family: 'Karma', sans-serif;
            font-weight: 300;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #BEE5F5;
            border: none;
            border-radius: 30px;
            box-shadow: 0 3px #B4D39C;
            width: 100%;
            justify-content: space-around;
            box-sizing: border-box;
        }

        .landing .button i {
            margin-right: 30px;
        } 

        .landing .button:active {
            transform: translateY(2px);
        }

        .landing-image {
            width: 300px;
            display: block;
            margin: 50px auto; 
        }

         #changing-text {
            font-family: 'Karma', sans-serif;
            font-size: 1.5rem;
            font-weight: 300;
            color: #fff;
            background-color: #B4D39C;
            padding: 5px;
            border-radius: 30px;
            display: inline-block;
            opacity: 1;
            transition: opacity 0.8s ease-in-out;
            width: 150px;
            text-align: center;
        }
    </style>
@endsection



@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        const words = ["rovnováhu", "odvahu", "spokojnosť", "pohodu", "radosť", "energiu", "zdravie", "silu", "slobodu"];
        let index = 0;
        const changingText = document.getElementById("changing-text");

        function changeText() {
            changingText.style.opacity = 0;

            setTimeout(() => {
                index = (index + 1) % words.length;
                changingText.textContent = words[index];
                changingText.style.opacity = 1; 
            }, 1000);
        }

        setInterval(changeText, 5000);
    </script>
@endsection

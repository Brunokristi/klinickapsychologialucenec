@extends('layouts.app')

@section('title', 'Služba')

@section('content')
    <div class="detail" style="padding-top: 90px;">
        <h1>Skupinová terapia</h1>
        <span class="tag">kategória</span>
        <span class="tag">hradí poisťovňa</span>
    </div>

    <div class="text-up-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#BEE5F5" fill-opacity="1" d="M0,0 C0,0 1120,120 1440,10 L1440,90 L0,90 Z">
            </path>
        </svg>
    </div>
    <div class="text">
        <p>Zameriavam sa na neviem čo. Psychológia ma baví od malička. Nejaké iné vety. Zameriavam sa na neviem čo. Psychológia ma
        baví od malička. Nejaké iné vety.</p>
    </div>

    <div class="text-bottom-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#BEE5F5" fill-opacity="1" d="M0,0 C320,70 1120,-10 1440,60 L1440,80 L0,80 Z">
            </path>
        </svg>
    </div>

    <div class="detail">
        <div class="one-line">
            <span class="number">1.</span>
            <p>Objednajte sa na termín Objednajte sa na termín</p>
        </div>

        <div class="one-line">
            <span class="number">2.</span>
            <p>Príďte nás navštíviť</p>
        </div>

        <div class="one-line">
            <span class="number">3.</span>
            <p>Príďte nás navštíviť</p>
        </div>


        <h2>Všetko, čo potrebujete na jednom mieste</h2>
        <p>Pridte oddychnuti a zrelaxovani.</p>
        <p>Pridte oddychnuti a zrelaxovani.</p>
        <a class="download" href="#">Prihlasovací formulár <i class="bi bi-arrow-down"></i></a>
        <a class="download" href="#">Prihlasovací formulár <i class="bi bi-arrow-down"></i></a>
        <a class="download" href="#">Prihlasovací formulár <i class="bi bi-arrow-down"></i></a>
        
    </div>
@endsection

@section('styles')
    <style>
        body {
            margin: 0;
        }       

        .detail {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
        }

        .detail h1 {
            font-family: 'Karma', sans-serif;
            font-size: 1.5rem;
            font-weight: 300;
            color: #B4D39C;
            padding: 0;
        }

        .detail span {
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            font-weight: 300;
            color: #BEE5F5;
            padding: 0px 10px;
            margin-right: 10px;
            border-radius: 30px;
            background-color: #fff;
            border: 1px solid #BEE5F5;
            width: fit-content;
            margin-bottom: 10px;
        }
        
        .text {
            background-color: #BEE5F5;
        }

        .text p{
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            font-weight: 300;
            color: #FFF;
            padding: 20px;
            margin: 0;
            text-align: justify;
        }

        .text-bottom-curve svg {
            transform: rotate(180deg);
        }

        .text-up-curve {
            margin-bottom: -5px;
        }

        .text-bottom-curve {
            margin-top: -5px;
        }

        .detail .one-line {
            display: flex;
            gap: 10px;
            align-items: center;
            margin-bottom: 10px;
        }

        .detail .one-line p {
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            font-weight: 300;
            color: #B4D39C;
            padding: 0;
            margin: 0;
        }

        .detail .number {
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            font-weight: 300;
            color: #fff;
            padding: 0;
            min-width: 40px;
            min-height: 40px;
            text-align: center;
            align-items: center;
            display: flex;
            justify-content: center;
            border-radius: 50%;
            background-color: #BEE5F5;
            margin: 0px;
        }

        .detail h2 {
            font-family: 'Karma', sans-serif;
            font-size: 1.3rem;
            font-weight: 300;
            color: #B4D39C;
            padding: 0;
            margin-top: 50px;
        }

        .detail .download {
            display: flex;
            padding: 10px;
            font-size: 18px;
            font-family: 'Karma', sans-serif;
            font-weight: 300;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #B4D39C;
            border: none;
            border-radius: 30px;
            box-shadow: 0 3px #BEE5F5;
            width: 100%;
            justify-content: space-around;
            box-sizing: border-box;
            margin-bottom: 10px;
            max-width: 350px;
        }

        .detail .download i {
            align-self: center;
        } 

        .detail .download:active {
            transform: translateY(2px);
        }

        .detail p {
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            font-weight: 300;
            color: #BEE5F5;
            padding: 0;
            margin: 0;
            margin-bottom: 20px;
        }
    </style>
@endsection
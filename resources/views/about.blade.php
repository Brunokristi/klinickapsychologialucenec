@extends('layouts.app')

@section('title', 'Naši Profesionáli')

@section('content')
    <div class="about">
        <h1>Čaves, Ja som Lenka!</h1>
        <h2>Mgr. Lenka Haferníková</h2>
        <span class="tag">dopravná psychológia</span>
        <span class="tag">terapia</span>
        <span class="tag">detská psychológia</span>

        <div class="one-line">
            <img class="photo" src="{{ asset('images/doctor.jpg') }}" alt="photo">
            <img class="photo" src="{{ asset('images/flowers.png') }}" alt="photo">
        </div>
    </div>

    <div class="text-up-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#B4D39C" fill-opacity="1" d="M0,0 C0,0 1120,120 1440,10 L1440,90 L0,90 Z">
            </path>
        </svg>
    </div>
    <div class="text">
        <p>Zameriavam sa na neviem čo. Psychológia ma baví od malička. Nejaké iné vety. Zameriavam sa na neviem čo. Psychológia ma
        baví od malička. Nejaké iné vety.</p>
    </div>

    <div class="text-bottom-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#B4D39C" fill-opacity="1" d="M0,0 C320,70 1120,-10 1440,60 L1440,80 L0,80 Z">
            </path>
        </svg>
    </div>

    <div class="about">
        <h1>Čaves, Ja som Lenka!</h1>
        <h2>Mgr. Lenka Haferníková</h2>
        <span class="tag">dopravná psychológia</span>
        <span class="tag">terapia</span>
        <span class="tag">detská psychológia</span>
    
        <div class="one-line">
            <img class="photo" src="{{ asset('images/doctor.jpg') }}" alt="photo">
            <img class="photo" src="{{ asset('images/flowers.png') }}" alt="photo">
        </div>
    </div>
    
    <div class="text-up-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#B4D39C" fill-opacity="1" d="M0,0 C0,0 1120,120 1440,10 L1440,90 L0,90 Z">
            </path>
        </svg>
    </div>
    <div class="text">
        <p>Zameriavam sa na neviem čo. Psychológia ma baví od malička. Nejaké iné vety. Zameriavam sa na neviem čo.
            Psychológia ma
            baví od malička. Nejaké iné vety.</p>
    </div>
    
    <div class="text-bottom-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#B4D39C" fill-opacity="1" d="M0,0 C320,70 1120,-10 1440,60 L1440,80 L0,80 Z">
            </path>
        </svg>
    </div>

    <div class="about">
        <h1>Čaves, Ja som Lenka!</h1>
        <h2>Mgr. Lenka Haferníková</h2>
        <span class="tag">dopravná psychológia</span>
        <span class="tag">terapia</span>
        <span class="tag">detská psychológia</span>
    
        <div class="one-line">
            <img class="photo" src="{{ asset('images/doctor.jpg') }}" alt="photo">
            <img class="photo" src="{{ asset('images/flowers.png') }}" alt="photo">
        </div>
    </div>
    
    <div class="text-up-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#B4D39C" fill-opacity="1" d="M0,0 C0,0 1120,120 1440,10 L1440,90 L0,90 Z">
            </path>
        </svg>
    </div>
    <div class="text">
        <p>Zameriavam sa na neviem čo. Psychológia ma baví od malička. Nejaké iné vety. Zameriavam sa na neviem čo.
            Psychológia ma
            baví od malička. Nejaké iné vety.</p>
    </div>
    
    <div class="text-bottom-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#B4D39C" fill-opacity="1" d="M0,0 C320,70 1120,-10 1440,60 L1440,80 L0,80 Z">
            </path>
        </svg>
    </div>
@endsection

@section('styles')
    <style>
        body {
            margin: 0;
        }       

        .about {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
            position: relative;
            padding-top: 30%;
        }

        .about h1 {
            font-family: 'Karma', sans-serif;
            font-size: 1.5rem;
            font-weight: 300;
            color: #B4D39C;
            padding: 0;
            margin: 0;
        }

        .about h2 {
            font-family: 'Karma', sans-serif;
            font-size: 1.3rem;
            font-weight: 300;
            color: #BEE5F5;
            padding: 0;
        }

        .about span {
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

        .about .one-line {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .about .photo {
            width: 50%;
            height: 200px;
            border-radius: 30px;
            object-fit: cover;
        }

        .one-line .photo:last-child {
            position: absolute;
            right: -5px;
            top: 20px;
            max-width: 120px; 
            z-index: 3;
            pointer-events: none;
            height: fit-content;
        }

        
        .text {
            background-color: #B4D39C;
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
        }

        .detail .one-line p {
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            font-weight: 300;
            color: #B4D39C;
            padding: 0;
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

        

        .detail .download {
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
            background-color: #B4D39C;
            border: none;
            border-radius: 30px;
            box-shadow: 0 3px #BEE5F5;
            width: 100%;
            justify-content: space-between;
            box-sizing: border-box;
            margin-bottom: 10px;
        }

        .detail .download i {
            margin-right: 30px;
        } 

        .detail .download:active {
            transform: translateY(2px);
        }
    </style>
@endsection


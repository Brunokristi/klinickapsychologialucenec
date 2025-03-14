@extends('layouts.app')

@section('title', 'Naši Profesionáli')

@section('content')
    <div class="about" style="padding-top: 90px;">
        <div>
            <h1>Čaves, Ja som Lenka!</h1>
            <h2>Mgr. Lenka Haferníková</h2>
            <div class="spans">
                <span class="tag">dopravná psychológia</span>
                <span class="tag">terapia</span>
                <span class="tag">detská psychológia</span>
            </div>
        </div>

        <div class="one-line">
            <img class="photo normal" src="{{ asset('images/doctor.jpg') }}" alt="photo">
            <img class="photo" src="{{ asset('images/flowers.png') }}" alt="photo" style="top: 20%;">
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
        <div>
            <h1>Čaves, Ja som Lenka!</h1>
            <h2>Mgr. Lenka Haferníková</h2>
            <div class="spans">
                <span class="tag">dopravná psychológia</span>
                <span class="tag">terapia</span>
                <span class="tag">detská psychológia</span>
            </div>
        </div>
    
        <div class="one-line">
            <img class="photo normal" src="{{ asset('images/doctor.jpg') }}" alt="photo">
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
        <div>
            <h1>Čaves, Ja som Lenka!</h1>
            <h2>Mgr. Lenka Haferníková</h2>
            <div class="spans">
                <span class="tag">dopravná psychológia</span>
                <span class="tag">terapia</span>
                <span class="tag">detská psychológia</span>
            </div>
        </div>
    
        <div class="one-line">
            <img class="photo normal" src="{{ asset('images/doctor.jpg') }}" alt="photo">
            <img class="photo" src="{{ asset('images/flowers.png') }}" alt="photo">
        </div>
    </div>
    
    <div class="text-up-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#B4D39C" fill-opacity="1" d="M0,0 C0,0 1120,120 1440,10 L1440,90 L0,90 Z">
            </path>
        </svg>
    </div>
    <div class="text" style="margin-bottom: -100px; padding-bottom: 200px;">
        <p>Zameriavam sa na neviem čo. Psychológia ma baví od malička. Nejaké iné vety. Zameriavam sa na neviem čo.
            Psychológia ma
            baví od malička. Nejaké iné vety.</p>
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
            margin-top: 20px;
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
            height: auto;
            width: 100px;
        }


        .spans {
            display: flex;
            flex-direction: column;
            margin-top: 10px;
        }
        
        .text {
            background-color: #B4D39C;
        }

        .text p{
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            font-weight: 300;
            color: #FFF;
            padding: 40px 20px;
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

        @media screen and (min-width: 768px) {
        .about {
            display: flex;
            flex-direction: row;
            align-items: center;
            gap: 20px;
            justify-content: center;
            height: 400px;
        }

        .normal {
            min-width: 300px;
        }

        
    
    }
    </style>
@endsection


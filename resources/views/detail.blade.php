@extends('layouts.app')

@section('title', $service->name)

@section('content')
    <div class="detail" style="padding-top: 90px;">
        <h1>{{ $service->name }}</h1>
        @foreach($service->tags as $tag)
            <span class="token">{{ $tag->name }}</span>
        @endforeach
    </div>

    <div class="text-up-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#BEE5F5" fill-opacity="1" d="M0,0 C0,0 1120,120 1440,10 L1440,90 L0,90 Z"></path>
        </svg>
    </div>
    <div class="text">
        <p>{{ $service->description }}</p>
    </div>

    <div class="text-bottom-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#BEE5F5" fill-opacity="1" d="M0,0 C320,70 1120,-10 1440,60 L1440,80 L0,80 Z"></path>
        </svg>
    </div>

    <div class="detail">
        <h2>Priebeh</h2>
        @foreach($service->steps as $index => $step)
            <div class="one-line">
                <span class="number">{{ $index + 1 }}.</span>
                <p>{{ $step->text }}</p>
            </div>
        @endforeach

        <h2>Čo si priniesť</h2>
        @foreach($service->necessities as $necessity)
        <div class="one-line">
            <span class="bullet"></span>
            <p>{{ $necessity->text }}</p>
        </div>
        @endforeach
        @foreach($service->files as $file)
            <a class="download" href="{{ Storage::url($file->path) }}" target="_blank">{{ basename($file->path) }} <i class="bi bi-arrow-down"></i></a>
        @endforeach

        <h2>Dôležité informácie</h2>
        @foreach($service->information as $information)
            <div class="one-line">
                <span class="bullet"></span>
                <p>{{ $information->text }}</p>
            </div>
        @endforeach

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

        .detail .token {
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
            color: #BEE5F5;
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

        .detail .bullet {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #BEE5F5;
        }
    </style>
@endsection
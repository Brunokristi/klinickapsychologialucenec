@extends('layouts.app')

@section('title', 'Naši Profesionáli')

@section('content')
    <div class="contact" style="padding-top: 20%;">
        <h1>Telefón</h1>
        <a class="button" href="tel:0944 094 090">Volať na číslo<i class="bi bi-arrow-right"></i></a>
        <p>0904 403 589</p>
        <img src="{{ asset('images/phone.png') }}" alt="plane" >
    </div>

    <div class="contact-up-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#BEE5F5" fill-opacity="1" d="M0,0 C0,0 1120,120 1440,10 L1440,90 L0,90 Z">
            </path>
        </svg>
    </div>
    <div class="contact-section">
        <h1>Email</h1>
        <a class="button white" href="mailto:klinickapsychologialc@gmail.com">Písať ma email<i class="bi bi-arrow-right"></i></a>
        <p>klinickapsychologia@gmail.com</p>
    </div>
    <div class="contact-bottom-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#BEE5F5" fill-opacity="1" d="M0,0 C320,70 1120,-10 1440,60 L1440,80 L0,80 Z">
            </path>
        </svg>
    </div>

    <div class="contact">
        <h1>Adresa</h1>
        <a class="button" href="https://maps.app.goo.gl/RNbmVpx1gsTzGx2w8" target="_blank" rel="noopener noreferrer">Navigovať na miesto<i class="bi bi-arrow-right"></i></a>
        <p>Kuzmányiho 6</p>
        <div id="map"></div>

        <h1>Naše priestory</h1>
        <div class="scroll-container">
            <div class="section" style="background: url('{{ asset('images/ambulancia.jpg') }}') no-repeat center center; background-size: cover;">
                <div class="bottom-section">
                    <span class="name">Lenka</span>
                </div>
            </div>
        
            <div class="section" style="background: url('{{ asset('images/doctor.jpg') }}') no-repeat center center; background-size: cover;">
                <div class="bottom-section">
                    <span class="name">Lenka</span>
                </div>
            </div>
        
            <div class="section" style="background: url('{{ asset('images/doctor.jpg') }}') no-repeat center center; background-size: cover;">
                <div class="bottom-section">
                    <span class="name">Lenka</span>
                </div>
            </div>
        </div>

        <p>Možnosť parkovania priamo pri ambulancii.</p>
    </div>

    <div class="contact-up-curve green">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#B4D39C" fill-opacity="1" d="M0,0 C0,0 1120,120 1440,10 L1440,90 L0,90 Z">
            </path>
        </svg>
    </div>
    <div class="contact-section green" style="margin-bottom: -60px; padding-bottom: 60px;">
        <h1>Ordinačné hodiny</h1>
        <p>PO-PIA 7:00-15:00</p>
        <div class="allert">
            <h1>Dňa 12.1.2024 neordinujeme. Zastupuje Ablancia XY.</h1>
        </div>
    </div>
@endsection

@section('styles')
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700&family=Karma:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <style>
        .contact {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
            justify-content: center;
            align-items: center;
        }

        .contact h1 {
            font-family: 'Karma', sans-serif;
            font-size: 1.5rem;
            font-weight: 300;
            color: #B4D39C;
            padding: 0;
        }

        .button {
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
            max-width: 350px;
        }

        .button.white {
            background-color: #fff;
            color: #B4D39C;
            box-shadow: 0 3px #B4D39C;

        }

        .button i {
            align-self: center;
        } 

        .button:active {
            transform: translateY(2px);
        }

        .contact p{
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            font-weight: 300;
            color: #B4D39C;
            padding: 20px;
            margin: 0;
            text-align: center;
        }

        .contact img {
            width: 100%;
            height: auto;
            margin-top: 20px;
            max-width: 350px;
        }

        .contact-section {
            background-color: #BEE5F5;
            display: flex;
            flex-direction: column;
            padding: 20px;
            justify-content: center;
            align-items: center;
            color: #fff;
        }

        .contact-section h1 {
            font-family: 'Karma', sans-serif;
            font-size: 1.5rem;
            font-weight: 300;
            padding: 0;
        }

        .contact-section p {
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            font-weight: 300;
            padding: 20px;
            margin: 0;
        }

        .contact-section.green {
            background-color: #B4D39C;
        }

        .contact-bottom-curve svg {
            transform: rotate(180deg);
        }

        .contact-up-curve {
            margin-bottom: -5px;
        }

        .contact-bottom-curve {
            margin-top: -5px;
        }

        #map {
            height: 300px;
            width: 100%;
            border-radius: 30px;
            border: none;
        }

        .contact-section .allert {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            padding: 20px;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #BEE5F5;
            border-radius: 30px;
            display: none;
        }

        .scroll-container {
            display: flex;
            gap: 30px;
            height: 400px;
            overflow-x: auto;
            overflow-y: hidden;
            background-color: #fff;
            font: 16px 'Inter', sans-serif;
            white-space: normal;
            padding-bottom: 10px;
            scroll-behavior: smooth;
            box-sizing: border-box;
            width: 100%;
        }

        .scroll-container::-webkit-scrollbar {
            width: 10px; 
            height: 8px;
        }

        .scroll-container::-webkit-scrollbar-thumb {
            background: #BEE5F5;       
            border-radius: 10px;
        }

        .scroll-container::-webkit-scrollbar-thumb:hover {
            background: #fff;
        }

        .scroll-container::-webkit-scrollbar-track {
            background: #fff;
            border-radius: 10px;
        }

        .scroll-container::-webkit-scrollbar-corner {
            background: white;
        }

        .scroll-container .section {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            align-items: center;
            height: 350px;
            min-width: 250px;
            border-radius: 20px;
            overflow: hidden;
            position: relative;
            padding: 10px;
            resize: none;
            box-sizing: border-box;
        }

        .scroll-container .section h1 {
            font-family: 'Karma', sans-serif;
            font-size: 1.5rem;
            font-weight: 300;
            color: #B4D39C;
            padding: 0;
            overflow-wrap: break-word;
            word-wrap: break-word; 
            white-space: normal;
            text-align: left; 
            max-width: 100%;
        }

        .scroll-container .section .bottom-section {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            background-color: #BEE5F5;
            width: 100%;
            border-radius: 30px;
            height: 50px;
            text-align: center;
            margin-top: auto;
            position: relative;
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            font-weight: 300;
            color: #fff;
        }

        .scroll-container .section .bottom-section a {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 50px;
            width: 50px !important;
            background-color: #B4D39C;
            color: #fff;
            text-decoration: none;
            border-radius: 50px;
            margin: 5px;
            font-size: 1.5rem;
        }
    </style>
@endsection

@section('scripts')
    <script>
        function initMap() {
            const mapStyles = [
                {
                    "featureType": "all",
                    "elementType": "labels",
                    "stylers": [{ "visibility": "off" }]
                },
                {
                    "featureType": "all",
                    "elementType": "labels.text.fill",
                    "stylers": [{ "color": "#BEE5F5" }]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [{ "color": "#ffffff" }]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.fill",
                    "stylers": [{ "color": "#BEE5F5" }]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry.stroke",
                    "stylers": [{ "color": "#BEE5F5" }]
                }
            ];

            // Create the map
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 48.33720225232961, lng: 19.662109538266197 },
                zoom: 15,
                styles: mapStyles,
                disableDefaultUI: true,
            });

            const marker = new google.maps.Marker({
                position: { lat: 48.33720225232961, lng: 19.662109538266197 },
                map: map,
                title: "Ambulancia Klinickej a Dopravnej Psychológie",
                icon: {
                    url: "marker.svg",
                    scaledSize: new google.maps.Size(40, 40),
                }
            });

            // Add an info window (popup) when clicking on the marker
            const infoWindow = new google.maps.InfoWindow({
                content: "<strong>Ambulancia Klinickej a Dopravnej Psychológie</strong><br>K. Kuzmányho 1757/7, 984 01 Lučenec"
            });

            marker.addListener("click", () => {
                infoWindow.open(map, marker);
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFEhUV6JylAf2KOOWeIzYiM-ILfryw9jM&callback=initMap" async defer></script>

@endsection
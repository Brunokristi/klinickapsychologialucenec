@extends('layouts.app')

@section('title', 'Kontakt')

@section('content')
    <div class="contact" style="padding-top: 90px;">
        <h1>Telefón</h1>
        <a class="button" href="tel:0944 094 090">Volať na číslo<i class="bi bi-arrow-right"></i></a>
        <a class="basic-text" style="color: #B4D39C; text-decoration: none;" href="tel:0944 094 090">+421 944 094 090</a>
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
        <p>klinickapsychologialc@gmail.com</p>
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
        <p>K. Kuzmányho 7, Lučenec</p>
        <div id="map"></div>

        <h1 style="margin-top: 20px;">Naše priestory</h1>
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
    <div class="contact-section green" style="margin-bottom: -100px; padding-bottom: 200px;">
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
            text-decoration: none;
        }
        
        .basic-text {
            font-family: 'Karma', sans-serif;
            font-size: 18px;
            font-weight: 300;
            color: #B4D39C;
            padding: 20px;
            margin: 0;
            text-align: center;
            text-decoration: none;
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
            color: #fff !important;
            text-decoration: none !important;
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
            margin-bottom: 40px;
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
                },
            ];

            // Create the map
            const map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 48.33720225232961, lng: 19.662109538266197 },
                zoom: 18,
                styles: mapStyles,
                disableDefaultUI: true,
            });

            // Define polygon coordinates for the building
            const buildingCoords = [
                { lat: 48.337169093658446, lng: 19.662081912387347 },
                { lat: 48.33715482966858, lng: 19.662237480395724 },
                { lat: 48.33718246591212, lng: 19.66226966698096 },
                { lat: 48.33737681156121, lng: 19.66218853056711 },
                { lat: 48.337366113677085, lng: 19.662104040664097 },
                { lat: 48.33722704070872, lng: 19.662131533278234 },
                { lat: 48.33722748646293, lng: 19.662091300117808 },
                { lat: 48.33716909365807, lng: 19.66208124183476 }
            ];

            // Create a polygon to highlight the building
            const buildingPolygon = new google.maps.Polygon({
                paths: buildingCoords,
                strokeColor: "#BEE5F5",
                strokeOpacity: 1,
                strokeWeight: 2,
                fillColor: "#BEE5F5",
                fillOpacity: 1
            });

            // Add the polygon to the map
            buildingPolygon.setMap(map);

            // Create markers
            const marker = new google.maps.Marker({
                position: { lat: 48.33720225232961, lng: 19.662109538266197 },
                map: map,
                title: "Ambulancia Klinickej a Dopravnej Psychológie",
                icon: {
                    url: "{{ asset('images/marker.svg') }}",
                    scaledSize: new google.maps.Size(40, 40),
                }
            });

            const tesco = new google.maps.Marker({
                position: { lat: 48.33639130032658, lng: 19.65977700277434 },
                map: map,
                title: "Tesco",
                icon: {
                    url: "{{ asset('images/tesco.png') }}",
                    scaledSize: new google.maps.Size(50, 20),
                }
            });

            const redcross = new google.maps.Marker({
                position: { lat: 48.33751661009178, lng: 19.66096136359495 },
                map: map,
                title: "Červený kríž",
                icon: {
                    url: "{{ asset('images/redcross.png') }}",
                    scaledSize: new google.maps.Size(40, 40),
                }
            });

            // Info window for the marker
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

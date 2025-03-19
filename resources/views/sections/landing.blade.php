    <div class="landing">
        <h1>Doprajte si možnosť znovu objaviť Vašu vnútornú</h1>
        <span id="changing-text">slobodu</span>
        <img class="landing-image" src="{{ asset('images/landing.png') }}" alt="contacts"> 
        <a href="products" class="button">Chcem začať<i class="bi bi-arrow-right"></i></a>
        <p>Ambulancia klinickej a dopravnej psychológie v Lučenci</p>
    </div>

    @php
        use Carbon\Carbon;

        // Find the next available non-weekend day (even if it's not in the database)
        $nextAvailableDate = Carbon::tomorrow();

        while ($nextAvailableDate->isWeekend()) {
            $nextAvailableDate->addDay(); // Skip weekends
        }
    @endphp

    @foreach($dates as $date)
        @if($date->date == Carbon::today()->toDateString())
            <div id="customPopup" class="popup-overlay">
                <div class="popup-content">
                    <h3>Dňa {{ Carbon::parse($date->date)->format('d.m.Y') }} neordinujeme</h3>
                    <p><br>Zástup: Mgr. Jana Siranková<br>Budova Agroinštitútu - Partizánska 17, Lučenec<br>
                    Tel. Kontakt: <a href="tel:0905409588">0905409588</a></p>
                    <br><br><br>
                    <p>Opäť ordinujeme dňa <span id="open">{{ $nextAvailableDate->format('d.m.Y') }}</span></p>
                    <button onclick="closePopup()">Zatvoriť</button>
                </div>
            </div>
        @endif
    @endforeach



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
            padding-top: 90px;
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
            color: #b4d39c;
            margin-top: 20px;
        }

        .landing .button {
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
            background-color: #BEE5F5;
            border: none;
            border-radius: 30px;
            box-shadow: 0 3px #B4D39C;
            width: 100%;
            justify-content: space-around;
            box-sizing: border-box;
            max-width: 350px;
        }

        .landing .button i {
            align-self: center;
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

        .popup-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .popup-content {
            background: #BEE5F5;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            color: #fff;
            max-width: 400px;
            width: 90%;
            font-family: 'Karma', sans-serif;
            font-weight: 300;
        }

        .popup-content p {
            margin: 0;
            width: 100%;
        }

        .popup-content button {
            margin-top: 10px;
            padding: 8px 20px;
            border: none;
            background: #B4D39C;
            color: white;
            font-size: 16px;
            cursor: pointer;
            border-radius: 30px;
        }

        .popup-content a {
            color: #fff;
            text-decoration: none;
        }

        .popup-content button:hover {
            background: #98b883;
        }

    </style>

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


        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("customPopup").style.display = "flex";
        });

        function closePopup() {
            document.getElementById("customPopup").style.display = "none";
        }

    </script>


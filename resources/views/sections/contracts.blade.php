<div class="contracts-up-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#B4D39C" fill-opacity="1" d="M0,0 C320,80 1120,-90 1600,80 L1440,90 L0,80 Z">
            </path>
        </svg>
    </div>
    <div class="contracts">
        <h1>Zazmluvnené poisťovne</h1>
        <div class="buttons">
            <span class="display">
                <img src="{{ asset('images/vszp_velke.png') }}" alt="logo vseobecnej zdravotnej poistovne">
            </span>
            <span class="display">
                <img src="{{ asset('images/union_velke.png') }}" alt="logo vseobecnej zdravotnej poistovne">
            </span>
            <span class="display">
                <img src="{{ asset('images/dovera_velke.png') }}" alt="logo vseobecnej zdravotnej poistovne">
            </span>
        </div>
        <div class="text-container">
            <p class="text-content"
                data-full-text="Zdravotné výkony si klient uhrádza v prípade, ak:<br><br>
                    • nie je poistencom zmluvnej poisťovne<br><br>
                    • bol psychologický výkon poskytnutý nad rámec, ktorý akceptuje zmluvná zdravotná poisťovňa<br><br>
                    • dané ťažkosti nie sú diagnózou zaraditeľné, bez klinickej indikácie<br><br>
                    • výkon spadá do zoznamu chorôb, pri ktorých sa zdravotné výkony neuhrádzajú na základe verejného zdravotného poistenia podľa 777/2004 Z.z. (Z02 – Vyšetrenie na administratívne účely: vodičský preukaz, pre poisťovňu, pred športovou súťažou, pred nástupom do zamestnania, prijatím do výchovno – vzdelávacieho ústavu, Iné vyšetrenia na administratívne účely); Z02.7 – Vydávanie lekárskych potvrdení; Z50.4 – Psychoterapia nezaradená inde; Z54.3 – Rekonvalescencia po psychoterapii">
                Zdravotné výkony si klient uhrádza v prípade...
            </p>
            <button class="text-button" onclick="toggleText(this)">zobraziť viac</button>
        </div>
    </div>
</body>

<script>
    function toggleText(button) {
        const textContainer = button.closest('.text-container');
        const textElement = textContainer.querySelector('.text-content');

        if (textContainer.classList.contains('expanded')) {
            textElement.innerHTML = textElement.getAttribute('data-full-text').slice(0, 44) + "...";
            button.textContent = "zobraziť viac";
        } else {
            textElement.innerHTML = textElement.getAttribute('data-full-text');
            button.textContent = "zobraziť menej";
        }

        textContainer.classList.toggle('expanded');
    }
</script>


<style>
    body {
        margin: 0;
    }
    
    .contracts{
        padding: 20px;
        background-color: #B4D39C;
        display: flex;
        flex-direction: column;
        transition: opacity 0.5s ease-out, transform 0.5s ease-out;
        margin-bottom: -20px;
    }

    .contracts h1, p{
        font-family: 'Karma', sans-serif;
        font-size: 1.5rem;
        font-weight: 300;
        color: #FFF;
        padding: 0;
        transition: opacity 0.5s ease-out, transform 0.5s ease-out;
    }

    .contracts p {
        font-size: 18px;
        margin-bottom: 5px;
    }

    .buttons {
        align-items: center;
        max-width: 100%;
        box-sizing: border-box;
        margin-bottom: 20px;
    }


    .contracts-bottom-curve svg {
        transform: rotate(180deg);
    }

    .contracts-up-curve {
        margin-bottom: -5px;
    }

    .contracts-bottom-curve {
        margin-top: -5px;
    }

    .contracts span {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 50px;
        background-color: #fff;
        border-radius: 30px;
        margin-bottom: 10px;
        width: 100%;
        max-width: 350px;
    }

    .contracts img {
        height: 80%;
    }

    .text-container {
        max-width: 600px;
        position: relative;
        width: 100%;
    }

    .text-content {
        font-family: 'Karma', sans-serif;
        font-size: 18px;
        color: #FFF;
        overflow: hidden;
        text-overflow: ellipsis;
        max-height: 4.5em;
        line-height: 1.5em;
        position: relative;
        width: 100%;
        box-sizing: border-box;
        text-align: start;
    }

    .text-container.expanded .text-content {
        max-height: none;
    }

    .text-button {
        display: inline-block;
        font-size: 18px;
        font-family: 'Karma', sans-serif;
        color: #BEE5F5;
        background-color: #B4D39C;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        padding: 0;
    }

    @media screen and (min-width: 768px) {
        .buttons {
            flex-direction: row;
            gap: 20px;
            justify-content: center;
        }

        .buttons a {
             min-width: 300px;
        }

        .contracts {
            justify-content: center;
            align-items: center;    
            padding-bottom: 200px;
            margin-bottom: -100px;        }
    }
</style>
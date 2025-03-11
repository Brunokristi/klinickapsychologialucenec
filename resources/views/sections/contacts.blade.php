<img class="contacts-image"  src="{{ asset('images/calling.png') }}" alt="contacts"> 
<div class="contacts-up-curve">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
        <path fill="#B4D39C" fill-opacity="1" d="M0,0 C0,80 1120,-90 1600,80 L1440,90 L0,90 Z">
        </path>
    </svg>
</div>
<div class="contacts">
    <h1>Kontakty</h1>
    <div class="buttons">
        <a href="tel:0944 094 090" class="button">Volať na telefón <i class="bi bi-arrow-right"></i></a>
        <a href="mailto:klinickapsychologialc@gmail.com" class="button">Písať na email <i class="bi bi-arrow-right"></i></a>
        <a href="https://maps.app.goo.gl/RNbmVpx1gsTzGx2w8" target="_blank" rel="noopener noreferrer" class="button">Navigovať na adresu <i class="bi bi-arrow-right"></i></a>
    </div>
    <a href="contact">Viac spôsobov, ako nás kontaktovať <i class="bi bi-arrow-right"></i></a>
    <img  src="{{ asset('images/plane.png') }}" alt="plane">
</div>
<div class="contacts-bottom-curve">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
        <path fill="#B4D39C" fill-opacity="1" d="M0,0 C320,20 1120,80 1440,20 L1440,80 L0,80 Z">
        </path>
    </svg>
</div>


<style>
    body {
        margin: 0;
    }
    
    .contacts{
        padding: 20px;
        background-color: #B4D39C;
        display: flex;
        flex-direction: column;
        z-index: 50;
        position: relative;
        justify-content: center;
        align-items: center;
    }

    .contacts h1{
        font-family: 'Karma', sans-serif;
        font-size: 1.5rem;
        font-weight: 300;
        color: #FFF;
        padding: 0;
    }

    .contacts a {
        font-family: 'Karma', sans-serif;
        font-size: 18px;
        font-weight: 300;
        color: #FFF;
        padding: 0;
        margin-top: 20px;
        text-decoration: none;
    }

    .buttons {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 20px;
        width: 100%;
    }


    .contacts-bottom-curve svg {
        transform: rotate(180deg);
    }

    .contacts-up-curve {
        margin-bottom: -5px;
        z-index: 2;
    }

    .contacts-bottom-curve {
        margin-top: -5px;
    }

    .contacts .button {
        display: flex;
        padding: 10px;
        font-size: 18px;
        font-family: 'Karma', sans-serif;
        font-weight: 300;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #B4D39C;
        background-color: #fff;
        border: none;
        border-radius: 30px;
        box-shadow: 0 3px #BEE5F5;
        width: 100%;
        justify-content: space-around;
        box-sizing: border-box;
        max-width: 350px;
    }

    .contacts .button i {
        align-self: center;
    } 

    .contacts .button:active {
        transform: translateY(2px);
    }

    .contacts img {
        width: 70%;
        margin-top: 50px;
        max-width: 350px;
    }

    .contacts-image {
        width: 60%;
        display: block;
        margin: 0 auto; 
        margin-bottom: -50px;
        z-index: 1;
        max-width: 350px;
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

        .contacts {
            justify-content: center;
            align-items: center;    
        }
    }

</style>
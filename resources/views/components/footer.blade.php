<div class="footer-curve">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
        <path fill="#BEE5F5" fill-opacity="1" d="M0,0 C320,75 1120,70 1440,40 L1440,80 L0,80 Z">
        </path>
    </svg>
</div>
<div class="footer_container">
    <div class="one-line">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">
        <h1>Klinická psychológia s.r.o.</h1>
    </div>
    <div class="footer-column">
        <p>Ambulancia klinickej a dopravnej psychológie v Lučenci</p>
    </div>

        <svg width="100%" height="33" viewBox="0 0 100 33" preserveAspectRatio="none" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0,16 C25,5 75,27 100,30" stroke="#B4D39C" stroke-width="2" fill="none" />
        </svg>


        <div class="footer-column">
            <a href="https://www.google.com/maps/place/K.+Kuzm%C3%A1nyho+1757%2F7,+984+01+Lu%C4%8Denec/@48.3372541,19.6595987,17z/data=!3m1!4b1!4m6!3m5!1s0x473ff8f2d618d3cd:0xf763cfe66c8f748d!8m2!3d48.3372506!4d19.6621736!16s%2Fg%2F11c4d6qrg0?entry=ttu&g_ep=EgoyMDI1MDIxMi4wIKXMDSoASAFQAw%3D%3D" target="_blank">Ulica K. Kuzmányho 1757/7 984 01 Lučenec</a>
            <a href="#">IČO: 46546731</a>
        </div>

        <svg width="100%" height="33" viewBox="0 0 100 33" preserveAspectRatio="none" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0,16 C25,30 75,27 100,16" stroke="#B4D39C" stroke-width="2" fill="none" />
        </svg>

        <div class="footer-column">
            <p>Zazmluvnené poisťovne</p>
            <div class="logos">
                <span><img src="{{ asset('images/vszp.png') }}" alt="VSZP Logo"></span>
                <span><img src="{{ asset('images/union.png') }}" alt="Union Logo"></span>
                <span><img src="{{ asset('images/dovera.png') }}" alt="Dôvera Logo"></span>
            </div>
        </div>

        <svg width="100%" height="33" viewBox="0 0 100 33" preserveAspectRatio="none" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0,16 C25,5 75,27 100,16" stroke="#B4D39C" stroke-width="2" fill="none" />
        </svg>

        <div class="footer-column">
            <a href="tel:+421904203344">Telefón: 0904 203 344</a>
            <a href="mailto:nieco@klinika.sk">Email: niečo@klinika.sk</a>
            <a href="contact">Všetky kontakty</a>
        </div>

        <svg width="100%" height="33" viewBox="0 0 100 33" preserveAspectRatio="none" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path d="M0,16 C25,30 75,27 100,16" stroke="#B4D39C" stroke-width="2" fill="none" />
        </svg>

        <div class="footer-column">
            <a href=" {{ asset('documents/ZÁSADY OCHRANY OSOBNÝCH ÚDAJOV.pdf') }}" target="_blank">Ochrana osobných
                udajov</a>
            <a href=" {{ asset('documents/ZÁSADY POUŽÍVANIA SÚBOROV COOKIE.pdf') }}" target="_blank">Nastavenia
                cookies</a>
        </div>

    <div class="footer-bottom">
        <p>2025<br>klinickapsychologialucenec.sk</p>
    </div>
</div>

<style>
    .footer_container {
        background: #BEE5F5;
        display: flex;
        flex-direction: column;
        width: 100%;        
    }

    .footer-column {
        display: flex;
        flex-direction: column;
        padding: 20px;
    }

    .footer_container h1 {
        font-family: 'Karma', sans-serif;
        font-size: 1.5rem;
        font-weight: 300;
        color: #fff;
        padding: 20px;
        padding-bottom: 0%;
    }

    .footer_container p {
        font-family: 'Karma', sans-serif;
        color: #fff;
        font-size: 16px;
    }

    .footer-column p {
        font-family: 'Karma', sans-serif;
        color: #fff;
        font-size: 16px;
        text-align: start;
    }

    .footer_container a {
        color: #fff;
        text-decoration: none;
        font-size: 16px;
        padding-bottom: 20px;
        font-family: 'Karma', sans-serif;
    }

    .footer-bottom {
        text-align: center;
        justify-content: center;
        padding-bottom: 30px;
        padding-top: 20px;
        width: 100%;
        padding: 20px;
    }

    .footer-bottom p{
        width: 100%;
        font-family: 'Karma', sans-serif;
        color: #fff;
        font-size: 16px;
    }

    .footer_container .one-line {
        display: flex;
        align-items: center;
        padding: 20px;
        padding-bottom: 0%;
    }

    .footer_container .one-line img {
        height: 30px;
    }

    .logos {
        display: flex;
        justify-content: space-around;
    }

    .logos span {
        background-color: #fff;
        border-radius: 30px;
        margin-right: 10px;
        height: 40px;
        width: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .logos img {
        height: 80%;
    }

    .footer-curve {
        margin-bottom: -5px;
    }
</style>


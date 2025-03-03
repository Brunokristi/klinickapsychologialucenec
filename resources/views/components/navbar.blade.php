<div class="topnav">
    <a href="/" class="logo">
        <img src="{{ asset('images/logo.png') }}" alt="Logo">  
    </a>

    <a href="javascript:void(0);" class="icon" id="menu_icon">
        <i class="bi bi-list"></i>
    </a>

    <!-- Mobile Navigation Links -->
    <div class="nav-links_mobile" id="mobile_second_menu">
        <a href="#">Služby</a>
        <a href="#" class="active">O nás</a>
        <a href="#">Kontakty</a>
    </div>

    <div class="green-curve">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
            <path fill="#B4D39C" fill-opacity="1" d="M0,10 C320,75 1120,-30 1440,10 L1440,80 L0,80 Z">
            </path>
        </svg>
    </div>
</div>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300&display=swap" rel="stylesheet">
<style>
    .topnav {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background-color: #B4D39C;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
        z-index: 1000; /* Highest priority */
        height: 50px;
    }

    .topnav a {
        text-decoration: none;
        display: flex;
        align-items: center;
        color: #fff;
        cursor: pointer;
    }

    .topnav .logo img {
        height: 30px;

    }

    .nav-links_mobile {
        position: fixed;
        top: 50px; /* Right below the navbar */
        left: 0;
        width: 100%;
        height: 100vh;
        padding: 20px;
        z-index: 999;
        align-items: center;
        background-color: #B4D39C;
        display: flex;
        flex-direction: column;
        opacity: 0; /* Initially hidden */
        transition: opacity 0.5s ease-out; /* Smooth fade-in effect */
        pointer-events: none; /* Prevents accidental clicks when hidden */
    }

    /* When active, softly appears */
    .nav-links_mobile.show {
        opacity: 1;
        pointer-events: auto; /* Allows interaction when visible */
    }

    /* Smooth fade-in effect for each link */
    .nav-links_mobile a {
        color: #fff;
        padding: 10px 0;
        text-decoration: none;
        font-size: 16px;
        text-align: center;
        opacity: 0; /* Links hidden initially */
        transform: translateY(10px); /* Slight lift effect */
        transition: opacity 0.5s ease-out, transform 0.5s ease-out;
    }

    /* Staggered fade-in for each link */
    .nav-links_mobile.show a {
        opacity: 1;
        transform: translateY(0);
    }

    /* Add slight delay for cascading effect */
    .nav-links_mobile.show a:nth-child(1) { transition-delay: 0.1s; }
    .nav-links_mobile.show a:nth-child(2) { transition-delay: 0.2s; }
    .nav-links_mobile.show a:nth-child(3) { transition-delay: 0.3s; }

    .nav-links_mobile a:hover {
        font-size: 16px;
    }

    .nav-links_mobile.show {
        display: flex;
    }

    .topnav .icon {
        font-size: 24px;
        cursor: pointer;
        z-index: 1100; 
        position: relative;
    }

    .topnav .green-curve {
        position: absolute;
        bottom: -75px; 
        left: 0;
        width: 100%;
        z-index: 0;
        overflow: hidden;
        height: 80px;
    }

    .topnav .green-curve svg {
        display: block;
        width: 100%;
        height: auto;
        translate: 0.3s ease-in-out;
        transform: rotate(180deg);
    }
</style>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const mobileMenu = document.getElementById("mobile_second_menu");
        const menuIcon = document.getElementById("menu_icon");

        // Toggle menu on click
        menuIcon.addEventListener("click", () => {
            mobileMenu.classList.toggle("show");

            // Toggle the icon between 'list' (☰) and 'x' (✖)
            if (mobileMenu.classList.contains("show")) {
                menuIcon.innerHTML = '<i class="bi bi-x"></i>';
            } else {
                menuIcon.innerHTML = '<i class="bi bi-list"></i>';
            }
        });
    });
</script>

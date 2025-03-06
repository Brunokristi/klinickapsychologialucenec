<div class="profesionals">
    <h1>Profesionáli, ktorí sa o Vás postarajú</h1>
    <div class="profesionals-container">

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

        <div class="section" style="background: url('{{ asset('images/doctor.jpg') }}') no-repeat center center; background-size: cover;">
            <div class="bottom-section">
                <span class="name">Lenka</span>
            </div>
        </div>

        <div class="section last-section">
            <h1>Spoznajte nás ešte lepšie</h1>
        
            <div class="bottom-section">
                <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                
                    <g id="SVGRepo_bgCarrier" stroke-width="0" />
                
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M9 14.2354V17.0001C9 19.7615 11.2386 22.0001 14 22.0001H14.8824C16.7691 22.0001 18.3595 20.7311 18.8465 19.0001"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M5.42857 3H5.3369C5.02404 3 4.86761 3 4.73574 3.01166C3.28763 3.13972 2.13972 4.28763 2.01166 5.73574C2 5.86761 2 6.02404 2 6.3369V7.23529C2 11.1013 5.13401 14.2353 9 14.2353C12.7082 14.2353 15.7143 11.2292 15.7143 7.521V6.3369C15.7143 6.02404 15.7143 5.86761 15.7026 5.73574C15.5746 4.28763 14.4267 3.13972 12.9785 3.01166C12.8467 3 12.6902 3 12.3774 3H12.2857"
                            stroke="#fff" stroke-width="0.5" stroke-linecap="round" />
                        <circle cx="19" cy="16" r="3" stroke="#fff" stroke-width="0.5" />
                        <path d="M12 2V4" stroke="#fff" stroke-width="0.5" stroke-linecap="round" />
                        <path d="M6 2V4" stroke="#fff" stroke-width="0.5" stroke-linecap="round" />
                    </g>
                </svg>
                <a href="about"><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>

<style>
    body {
        margin: 0;
    }
    
    .profesionals {
        padding: 20px;
        background-color: #fff;
        padding-right: 0;
    }

    .profesionals h1{
        font-family: 'Karma', sans-serif;
        font-size: 1.5rem;
        font-weight: 300;
        color: #BEE5F5;
        padding: 0;
    }

    .profesionals-container {
        display: flex;
        gap: 30px;
        height: 400px;
        overflow-x: auto;
        overflow-y: hidden;
        background-color: #fff;
        font: 16px 'Inter', sans-serif;
        white-space: nowrap;
        padding-bottom: 10px;
        scroll-behavior: smooth;
    }

    .profesionals-container::-webkit-scrollbar {
        width: 10px; 
        height: 8px;
    }

    .profesionals-container::-webkit-scrollbar-thumb {
        background: #fff;
        border: solid 1px #BEE5F5;            
        border-radius: 10px;
    }

    .profesionals-container::-webkit-scrollbar-thumb:hover {
        background: #fff;
    }

    .profesionals-container::-webkit-scrollbar-track {
        background: #BEE5F5;
        border-radius: 10px;
    }

    .profesionals-container::-webkit-scrollbar-corner {
        background: white;
    }

    .profesionals-container .section {
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        align-items: center;
        height: 350px;
        width: 250px;
        min-width: 250px;
        resize: none;
        border-radius: 20px;
        overflow: hidden;
        position: relative;
        padding: 10px;
        resize: none;
        box-sizing: border-box;
    }

    .profesionals-container .section h1 {
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

    .profesionals-container .section .bottom-section {
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

    .profesionals-container .section .bottom-section a {
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

    .profesionals-container .last-section {
        display: flex;
        flex-direction: column;
        min-height: 350px;
        min-width: 250px;
        padding: 20px;
        background-color: #BEE5F5;
        border-radius: 30px;
        gap: 10px;
        box-sizing: border-box;
        resize: none;
        margin-right: 20px;
    }

    .profesionals-container .last-section .bottom-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex: 1;
        gap: 10px;
        align-items: end;
    }

    .profesionals-container .last-section h1{
        color: #fff;
    }
</style>
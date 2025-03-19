<div class="scroll-up-curve">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
        <path fill="#BEE5F5" fill-opacity="1" d="M0,0 C0,80 1120,-90 1600,80 L1440,90 L0,90 Z"></path>
    </svg>
</div>

<div class="scroll">
    <h1>Naši klienti najčastejšie hľadajú</h1>
    <div class="scroll-container">
        
        @foreach($services as $service)
            <div class="section">
                <h1>{{ $service->name }}</h1>

                @if($service->category)
                    <span class="token">{{ $service->category->name }}</span>
                @endif
                
                @foreach($service->tags as $tag)
                    <span class="token">{{ $tag->name }}</span>
                @endforeach

                <div class="bottom-section">
                    {!! $service->icon !!}
                    <a href="{{ route('service.detail', ['id' => $service->id]) }}"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        @endforeach

        <div class="section last-section">
            <h1>Preskúmajte všetky naše služby</h1>
            <div class="bottom-section">
                <a href="{{ route('products') }}"><i class="bi bi-arrow-right"></i></a>
            </div>
        </div>

    </div>
</div>

<div class="scroll-bottom-curve">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 80">
        <path fill="#BEE5F5" fill-opacity="1" d="M0,0 C320,20 1120,80 1440,20 L1440,80 L0,80 Z"></path>
    </svg>
</div>


<style>

    body {
        margin: 0;
    }
    
    .scroll {
        padding: 20px;
        background-color: #BEE5F5;
        padding-right: 0;
    }

    .scroll h1{
        font-family: 'Karma', sans-serif;
        font-size: 1.5rem;
        font-weight: 300;
        color: #FFF;
        padding: 0;
    }

    .scroll-container {
        display: flex;
        gap: 30px;
        height: 400px;
        overflow-x: auto;
        overflow-y: hidden;
        background-color: #BEE5F5;
        font: 16px 'Inter', sans-serif;
        white-space: nowrap;
        padding-bottom: 10px;
        scroll-behavior: smooth;
    }

    .scroll-container::-webkit-scrollbar {
        width: 10px; 
        height: 8px;
    }

    .scroll-container::-webkit-scrollbar-thumb {
        background: #B4D39C;            
        border-radius: 10px;
    }

    .scroll-container::-webkit-scrollbar-thumb:hover {
        background: #93D4A0;
    }

    .scroll-container::-webkit-scrollbar-track {
        background: white;
        border-radius: 10px;
        
    }

    .scroll-container::-webkit-scrollbar-corner {
        background: white;
    }

    .scroll-container .section {
        display: flex;
        flex-direction: column;
        height: 350px;
        width: 250px;
        resize: none;
        padding: 20px;
        background-color: #fff;
        border-radius: 30px;
        gap: 10px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
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
        justify-content: space-between;
        align-items: center;
        flex: 1;
        gap: 10px;
        align-items: end;
    }

    .scroll-container .section .token{
        border: #BEE5F5 1px solid;
        color: #BEE5F5;
        padding: 5px;
        border-radius: 20px;
        width: fit-content;
    }

    .scroll-container .section img{
        width: 100px;
        object-fit: cover;
        border-radius: 20px;
        color: #B4D39C;
    }

    .scroll-container .section .bottom-section a {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 50px;
        width: 50px !important;
        background-color: #BEE5F5;
        color: #fff;
        text-decoration: none;
        border-radius: 50px;
        margin: 5px;
        font-size: 1.5rem;
    }

    .scroll-container .last-section {
        background-color: #B4D39C;
        color: #fff;
        margin-right: 20px;
    }

    .scroll-container .last-section h1{
        color: #fff;
    }

    .scroll-bottom-curve svg {
        transform: rotate(180deg);
    }

    .scroll-up-curve {
        margin-bottom: -5px;
    }

    .scroll-bottom-curve {
        margin-top: -5px;
    }

</style>



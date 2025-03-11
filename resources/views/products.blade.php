@extends('layouts.app')

@section('title', 'Služby')

@section('content')
    <div class="search">
        <form role="search" id="form">
            <input type="search" id="query" name="q" placeholder="Hľadaný výraz..." aria-label="Search through site content">
            <button>
                <svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g id="SVGRepo_bgCarrier" stroke-width="0" />
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" />
                    <g id="SVGRepo_iconCarrier">
                        <path
                            d="M15.7955 15.8111L21 21M18 10.5C18 14.6421 14.6421 18 10.5 18C6.35786 18 3 14.6421 3 10.5C3 6.35786 6.35786 3 10.5 3C14.6421 3 18 6.35786 18 10.5Z"
                            stroke="#B4D39C" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                    </g>
                </svg>
            </button>   
        </form>
    </div>

    <div class="scroll">
        <h1 style="color:#fee5f5">Kategória</h1>
        <div class="scroll-container">
            <div class="section blue">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>

                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="section blue">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>
            
                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="section blue">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>
            
                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll">
        <h1 style="color:#b4c39d">Kategória</h1>
        <div class="scroll-container">
            <div class="section green">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>

                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="section green">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>
            
                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="section green">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>
            
                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <img class="illustration" src="{{ asset('images/hands.png') }}" alt="illustration"> 

    <div class="scroll">
        <h1 style="color:#fee5f5">Kategória</h1>
        <div class="scroll-container">
            <div class="section blue">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>

                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="section blue">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>
            
                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="section blue">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>
            
                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll">
        <h1 style="color:#b4c39d">Kategória</h1>
        <div class="scroll-container">
            <div class="section green">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>

                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="section green">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>
            
                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>

            <div class="section green">
                <h1>Skupinová terapia</h1>
                <span class="token">kategoria</span>
                <span class="token">hradi poistovna</span>
            
                <div class="bottom-section">
                    <svg width="120px" height="120px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M20.9423 3.05768C23.4117 5.52701 21.4099 11.5324 16.4712 16.4711C11.5326 21.4097 5.5272 23.4115 3.05787 20.9422C0.588547 18.4728 2.59033 12.4675 7.52899 7.5288C12.4676 2.59014 18.473 0.588345 20.9423 3.05768ZM3.05768 3.05782C0.588349 5.52715 2.59013 11.5325 7.52879 16.4712C12.4674 21.4099 18.4728 23.4117 20.9421 20.9423C23.4115 18.473 21.4097 12.4676 16.471 7.52894C11.5324 2.59028 5.527 0.588485 3.05768 3.05782Z"
                            stroke="#fff" stroke-width="0.5" />
                        <path
                            d="M14.5 12C14.5 13.3807 13.3807 14.5 12 14.5C10.6193 14.5 9.5 13.3807 9.5 12C9.5 10.6193 10.6193 9.5 12 9.5C13.3807 9.5 14.5 10.6193 14.5 12Z"
                            stroke="#fff" stroke-width="0.5" />
                    </svg>
                    <a href="detail"><i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')

<style>
   
    
    .search {
        padding: 20px;
        padding-top: 90px;
        background-color: #fff;
    }

    .search form {
        background-color: #fff;
        width: 100%;
        height: 46px;
        border-radius: 30px;
        display: flex;
        flex-direction: row;
        align-items: center;
        border: 1px solid #B4D39C;
        box-sizing: border-box;
    }

    .search input {
        all: unset;
        font: 18px 'Inter', sans-serif;
        font-weight: 300;
        color: #B4D39C;
        height: 100%;
        width: 100%;
        padding: 6px 10px;
    }

    .search form input::placeholder {
        color: #B4D39C;
    }

    .search button {
        all: unset;
        cursor: pointer;
        width: 44px;
        height: 44px;
    }

    .search svg {
        color: #B4D39C;
        fill: currentColor;
        width: 24px;
        height: 24px;
    }

    .search input::-webkit-search-cancel-button {
        appearance: none;
        background: url('close.svg') no-repeat center;
        background-size: contain;
        width: 24px;
        height: 24px;
        cursor: pointer;
    }

    .scroll {
        padding: 20px;
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
        font: 16px 'Inter', sans-serif;
        white-space: nowrap;
        padding-bottom: 10px;
        scroll-behavior: smooth;
    }

    .blue {
        background-color: #BEE5F5;
        color: #fff;
    }

    .green {
        background-color: #B4D39C;
        color: #fff;
    }

    .green i{
        color: #B4D39C;
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
        border-radius: 30px;
        gap: 10px;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        box-sizing: border-box;
    }

    .scroll-container .section h1 {
        font-family: 'Karma', sans-serif;
        font-size: 1.5rem;
        font-weight: 300;
        color: #FFF;
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
        border: #FFF 1px solid;
        color: #FFF;
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
        background-color: #FFF;
        color: #BEE5F5;
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

    .illustration {
        width: 100%;
    }

</style>
@endsection
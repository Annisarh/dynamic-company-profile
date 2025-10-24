<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @hasSection('title')
            @yield('title') | eDUSITY
        @else
            eDUSITY
        @endif
    </title>
    @vite('resources/css/app.css')
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>
<style>
</style>
<body class="bg=[#F5F5F5]">
    <div id="app">
        {{-- navbar start --}}
        <nav class="navbar w-full h-18 text-white py-1 fixed top-0 left-0 flex items-center justify-between z-10">
            <img src="images/logo.png" alt="logo" class="w-[180px]">
            <img id="menu-icon" src="images/menu-icon.png" class="w-10 absolute items-center right-10 sm:hidden" alt="">
            <ul id="nav-bar" class="sm:flex flex-col md:flex-row sm:items-center sm:justify-between fixed top-20 sm:pt-0 pt-5 bottom-0 bg-blue-800 md:bg-transparent md:top-0 md:text-xl md:px-0 md:py-0 right-0 md:relative text-xl px-8 text-left sm:gap-10 space-y-2 sm:opacity-100 opacity-0 sm:space-y-0 transition-all duration-700">
                <li><a href="#home" class="sm:hover:border-b">Home</a></li>
                <li><a href="#program" class="sm:hover:border-b">Program</a></li>
                <li><a href="#about" class="sm:hover:border-b">About us</a></li>
                <li><a href="#kampus" class="sm:hover:border-b">Kampus</a></li>
                <li><a href="#testi" class="sm:hover:border-b">Testimoni</a></li>
                <li>
                    <button class="sm:px-4 sm:py-2 text-xl rounded-3xl sm:bg-white sm:text-black cursor-pointer hover:scale-105">Contact us</button>
                </li>
            </ul>
        </nav>
        {{-- navbar ends --}}

        {{-- hero --}}
        <div class="w-full min-h-screen bg-[url('../../public/images/hero.png')] bg-cover bg-center relative">
            <div class="absolute w-full h-full bg-[linear-gradient(rgba(8,0,58,0.7))] flex flex-col items-center justify-center gap-4">
                <div class="text-white sm:w-[60%] text-center font-semibold sm:text-[55px] sm:leading-16 w-full text-4xl leading-12 mt-4 sm:mt-0">
                    We Ensure better education for a better world
                </div>
                <p class="md:text-md text-white md:w-1/2 text-center">Our cutting-edge curriculum is designed to empower students with the knowledge, skills, and experiences needed to excel in the dynamic field of education</p>
                <button class="px-6 py-3 bg-white text-gray-800 font-semibold text-md rounded-3xl flex items-center gap-2">Explore more 
                    <img src="images/dark-arrow.png" class="w-7 h-4" alt="">
                </button>
            </div>
        </div>
        {{-- hero ends --}}


        <main class="py-4 pt-[58px] text-center">
            @yield('content')
        </main>


    </div>
    {{-- <script src="resources/js/script.js"></script> --}}
    <script type="text/javascript">
        window.onscroll = function(){
            // navheader
            const header = document.querySelector('nav');
            const fixedNav = header.offsetTop;
            if(window.pageYOffset > 200 ){
                header.classList.add('navfix');
            } else {
                header.classList.remove('navfix');
            }
        }

        // navmenu
        const menu = document.querySelector("#menu-icon");
        const navbar = document.querySelector("#nav-bar");
        const tombol = document.querySelector("#tombol");
        menu.addEventListener("click", function () {
            navbar.classList.toggle("opacity-0");
        });
        navbar.addEventListener("click", function () {
            navbar.classList.toggle("opacity-0");
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css"/>
</head>
<style>
</style>
<body class="bg=[#F5F5F5]">
    <div id="app">
       
        <main class="py-4 pt-[58px] text-center">
            @yield('content')
        </main>

        {{-- footer start --}}
        <footer class="py-4 mt-[70px] pl-[10%] pr-[10%]">
            <hr class="text-gray-500 sm:mb-8 mb-4">
            <div class="flex flex-col sm:flex-row gap-2 items-center justify-between text-gray-900 text-md sm:mb-8">
                <p>&copy; 2025 Edusity. All rights reserved</p>
                <div class="flex flex-row gap-6">
                    <p>Terms of Services</p>
                    <p>Privacy Polict</p>
                </div>
            </div>
        </footer>
        {{-- footer ends --}}


    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
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
        
        // swipper
        const swiper = new Swiper('.slider-wrapper', {
        loop: true,
        spaceBetween: 30,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // // Navigation arrows
        // navigation: {
        //     nextEl: '.swiper-button-next',
        //     prevEl: '.swiper-button-prev',
        // },

        // breakpoint
        breakpoints: {
            0: {
                slidesPerView: 1
            },
            620: {
                slidesPerView: 1
            },
            1024: {
                slidesPerView: 2
            },
        }
        });
    </script>
</body>
</html>
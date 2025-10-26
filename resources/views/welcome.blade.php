@extends('layouts.app')
       {{-- navbar start --}}
        <nav class="navbar w-full h-18 text-white py-1 fixed top-0 left-0 flex items-center justify-between z-10">
            <img src="images/logo.png" alt="logo" class="w-[180px]">
            <img id="menu-icon" src="images/menu-icon.png" class="w-10 absolute items-center right-10 sm:hidden" alt="">
            <ul id="nav-bar" class="sm:flex flex-col md:flex-row sm:items-center sm:justify-between fixed top-17 sm:pt-0 pt-5 bottom-0 bg-blue-800 md:bg-transparent md:top-0 md:text-xl md:px-0 md:py-0 right-0 md:relative text-xl px-8 text-left sm:gap-10 space-y-2 sm:opacity-100 opacity-0 sm:space-y-0 transition-all duration-700">
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
        <div id="home" class="w-full min-h-screen bg-[url('../../public/images/hero.png')] bg-cover bg-center relative">
            <div class="absolute w-full h-full bg-[linear-gradient(rgba(8,0,58,0.7))] flex flex-col items-center justify-center gap-4">
                <div class="text-white sm:w-[60%] text-center font-semibold sm:text-[55px] sm:leading-16 w-full text-4xl leading-12 mt-4 sm:mt-0">
                     {{$newAbout['tagline']}}
                </div>
                <p class="md:text-md text-white md:w-1/2 text-center">Our cutting-edge curriculum is designed to empower students with the knowledge, skills, and experiences needed to excel in the dynamic field of education</p>
                <button class="px-6 py-3 bg-white text-gray-800 font-semibold text-md rounded-3xl flex items-center gap-2">Explore more 
                    <img src="images/dark-arrow.png" class="w-7 h-4" alt="">
                </button>
            </div>
        </div>
        {{-- hero ends --}}

@section('content')
    {{-- program start --}}
    <div class="space-y-2">
        <h4 class="text-center font-semibold sm:text-xl text-lg text-blue-900">OUR PROGRAM</h4>
        <h2 class="font-bold sm:text-3xl text-2xl text-gray-800 tracking-wider mb-15">What We Offer</h2>
        <div class="grid md:grid-cols-3 gap-12 pl-[10%] pr-[10%]">
            <div id="program" class="relative group">
                <img src="images/program-1.png" class="rounded-2xl" alt="">
                <div id="caption" class="absolute rounded-2xl top-0 bottom-0 left-0 right-0 bg-gray-700/30 flex flex-col items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-700 ease-in-out pt-[70%] group-hover:pt-0">
                    <img src="images/program-icon-1.png" class="w-[70px]" alt="">
                    <p class="text-white">Graduation Degree</p>
                </div>
            </div>
            <div id="program" class="relative group">
                <img src="images/program-2.png" class="rounded-2xl" alt="">
                <div id="caption" class="absolute rounded-2xl top-0 bottom-0 left-0 right-0 bg-gray-700/30 flex flex-col items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-700 ease-in-out pt-[70%] group-hover:pt-0">
                    <img src="images/program-icon-2.png" class="w-[70px]" alt="">
                    <p class="text-white">Master Degree</p>
                </div>
            </div>
             <div id="program" class="relative group">
                <img src="images/program-3.png" class="rounded-2xl" alt="">
                <div id="caption" class="absolute rounded-2xl top-0 bottom-0 left-0 right-0 bg-gray-700/30 flex flex-col items-center justify-center gap-4 opacity-0 group-hover:opacity-100 transition-all duration-700 ease-in-out pt-[70%] group-hover:pt-0">
                    <img src="images/program-icon-3.png" class="w-[70px]" alt="">
                    <p class="text-white">Post Graduation</p>
                </div>
            </div>
        </div>
    </div>
    {{-- program ends --}}

    {{-- about university start --}}
    <div id="about" class="py-4 mt-[78px] text-center">
        <div class="flex flex-col-reverse md:flex-row pl-[10%] pr-[10%] gap-8">
            <div class="">
                <img src="images/about.png" alt="" class="rounded-3xl">
                {{-- <iframe class="" src="https://youtu.be/qD8NzzzeAp0"></iframe> --}}
            </div>
            <div class="text-left text-sm h-full flex flex-col">
                <h4 class="font-semibold text-xl text-blue-800">ABOUT UNIVERSITY</h4>
                <h1 class="font-bold text-4xl">Nurturing Tomorrow's <br> Leaders Today</h1>
                <p class="text-gray-800 mt-4">
                    Embark on a transformative educational journey with our university's comprehensive education programs. Our cutting-edge curriculum is designed to empower students with the knowledge, skills, and experiences needed to excel in the dynamic field of education.
                </p>
                <p class="text-gray-800 mt-2">
                    With a focus on innovation, hands-on learning, and personalized mentorship, our programs prepare aspiring educators to make a meaningful impact in classrooms, schools, and communities.
                </p>
                <p class="text-gray-800 mt-2">
                    Whether you aspire to become a teacher, administrator, counselor, or educational leader, our diverse range of programs offers the perfect pathway to achieve your goals and unlock your full potential in shaping the future of education.
                </p>
            </div>
        </div>
    </div>
    {{-- about university ends --}}

    {{-- campus galery start --}}
    <div id="kampus" class="py-4 mt-[70px] pl-[10%] pr-[10%]">
        <div class="text-center">
            <h4 class="font-semibold text-xl text-blue-800 uppercase">Gallery</h4>
            <h1 class="font-bold text-4xl">Campus Photos</h1>
        </div>
        <div class="mt-16 grid grid-cols-2 sm:grid-cols-4 gap-4">
            <img src="images/gallery-1.png" class="rounded-3xl" alt="">
            <img src="images/gallery-2.png" class="rounded-3xl" alt="">
            <img src="images/gallery-3.png" class="rounded-3xl" alt="">
            <img src="images/gallery-4.png" class="rounded-3xl" alt="">
        </div>
    </div>
    {{-- campus galery ends --}}

    {{-- testimonial start --}}
    <div id="testi" class="py-4 mt-[70px] pl-[10%] pr-[10%]">
        <div class="text-center">
            <h4 class="font-semibold text-xl text-blue-800 uppercase">TESTIMONIALS</h4>
            <h1 class="font-bold text-4xl">What Student Says</h1>
        </div>
        <div id="testimoni" class="relative mt-12">
            {{-- <img src="images/back-icon.png" class="absolute bg-blue-700 sm:p-[15px] p-[15px] w-[45px] -top-8 sm:left-0 -left-3 rounded-[50%]" alt="">
            <img src="images/next-icon.png" class="absolute bg-blue-700 sm:p-[15px] p-[15px] w-[45px] -top-8 sm:left-12 left-10 rounded-[50%]" alt=""> --}}
           <div class="mt-8 swiper w-full h-fit py-8">
            <div class="slider-wrapper">
                <ul class="transition-transform duration-500 ease-in-out swiper-wrapper">
                    <li class="shrink-0 w-full sm:w-1/2 text-left text-sm text-gray-700 leading-7 swiper-slide">
                        <div class="slide shadow-3xl sm:p-10 p-5 rounded-xl bg-gray-100">
                            <div class="user-info flex gap-4 items-center mb-4">
                                <img src="images/user-1.png" class="w-[65px] rounded-[50%] border border-[£212EA0]" alt="">
                                <div>
                                    <h3>William Jackson</h3>
                                    <span>Edusity, USA</span>
                                </div>
                            </div>
                            <P>
                                Choosing to pursue my degree at Edusity was one of the best decisions I've ever made. The supportive community, state-of-the-art facilities, and commitment to academic excellence have truly exceeded my expectations.
                            </P>
                        </div>
                    </li>
                    <li class="shrink-0 w-full sm:w-1/2 text-left text-sm text-gray-700 leading-7 swiper-slide">
                        <div class="slide shadow-3xl sm:p-10 p-5 rounded-xl bg-gray-100">
                            <div class="user-info flex gap-4 items-center mb-4">
                                <img src="images/user-1.png" class="w-[65px] rounded-[50%] border border-[£212EA0]" alt="">
                                <div>
                                    <h3>William Jackson</h3>
                                    <span>Edusity, USA</span>
                                </div>
                            </div>
                            <P>
                                Choosing to pursue my degree at Edusity was one of the best decisions I've ever made. The supportive community, state-of-the-art facilities, and commitment to academic excellence have truly exceeded my expectations.
                            </P>
                        </div>
                    </li>
                    <li class="shrink-0 w-full sm:w-1/2 text-left text-sm text-gray-700 leading-7 swiper-slide">
                        <div class="slide shadow-3xl sm:p-10 p-5 rounded-xl bg-gray-100">
                            <div class="user-info flex gap-4 items-center mb-4">
                                <img src="images/user-1.png" class="w-[65px] rounded-[50%] border border-[£212EA0]" alt="">
                                <div>
                                    <h3>William Jackson</h3>
                                    <span>Edusity, USA</span>
                                </div>
                            </div>
                            <P>
                                Choosing to pursue my degree at Edusity was one of the best decisions I've ever made. The supportive community, state-of-the-art facilities, and commitment to academic excellence have truly exceeded my expectations.
                            </P>
                        </div>
                    </li>
                    <li class="shrink-0 w-full sm:w-1/2 text-left text-sm text-gray-700 leading-7 swiper-slide">
                        <div class="slide shadow-3xl sm:p-10 p-5 rounded-xl bg-gray-100">
                            <div class="user-info flex gap-4 items-center mb-4">
                                <img src="images/user-1.png" class="w-[65px] rounded-[50%] border border-[£212EA0]" alt="">
                                <div>
                                    <h3>William Jackson</h3>
                                    <span>Edusity, USA</span>
                                </div>
                            </div>
                            <P>
                                Choosing to pursue my degree at Edusity was one of the best decisions I've ever made. The supportive community, state-of-the-art facilities, and commitment to academic excellence have truly exceeded my expectations.
                            </P>
                        </div>
                    </li>
                    <li class="shrink-0 w-full sm:w-1/2 text-left text-sm text-gray-700 leading-7 swiper-slide">
                        <div class="slide shadow-3xl sm:p-10 p-5 rounded-xl bg-gray-100">
                            <div class="user-info flex gap-4 items-center mb-4">
                                <img src="images/user-1.png" class="w-[65px] rounded-[50%] border border-[£212EA0]" alt="">
                                <div>
                                    <h3>William Jackson</h3>
                                    <span>Edusity, USA</span>
                                </div>
                            </div>
                            <P>
                                Choosing to pursue my degree at Edusity was one of the best decisions I've ever made. The supportive community, state-of-the-art facilities, and commitment to academic excellence have truly exceeded my expectations.
                            </P>
                        </div>
                    </li>
                    <li class="shrink-0 w-full sm:w-1/2 text-left text-sm text-gray-700 leading-7 swiper-slide">
                        <div class="slide shadow-3xl sm:p-10 p-5 rounded-xl bg-gray-100">
                            <div class="user-info flex gap-4 items-center mb-4">
                                <img src="images/user-1.png" class="w-[65px] rounded-[50%] border border-[£212EA0]" alt="">
                                <div>
                                    <h3>William Jackson</h3>
                                    <span>Edusity, USA</span>
                                </div>
                            </div>
                            <P>
                                Choosing to pursue my degree at Edusity was one of the best decisions I've ever made. The supportive community, state-of-the-art facilities, and commitment to academic excellence have truly exceeded my expectations.
                            </P>
                        </div>
                    </li>
                </ul>
            </div>
           </div>
        </div>
    </div>
    {{-- testimonial ends --}}

    {{-- contact start --}}
    <div class="py-4 mt-[70px] pl-[10%] pr-[10%]">
        <div class="text-center mb-12">
            <h4 class="font-semibold text-xl text-blue-800 uppercase">Contact us</h4>
            <h1 class="font-bold text-4xl">Get in Touch</h1>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 text-gray-700 px-8 gap-12 sm:gap-4">
            <div id="left-side">
                <div class="flex flex-row gap-2 items-center mb-4">
                    <h2 class="font-bold text-xl">Send us a message</h2>
                    <img src="images/msg-icon.png" class="w-[45px]" alt="">
                </div>
                <p class="font-medium text-sm text-gray-700 text-left">
                    Feel free to reach out through contact form or find our contact information below. Your feedback, questions, and suggestions are important to us as we strive to provide exceptional service to our university community.
                </p>
                <p class="w-fit flex mt-4 gap-2 items-center text-sm">
                    <img src="images/mail-icon.png" class="w-[23px] h-[18px]" alt="">
                     {{$newAbout['email']}}
                </p>
                <p class="w-fit flex mt-4 gap-2 items-center text-left text-sm">
                    <img src="images/phone-icon.png" class="w-[23px] h-[18px]" alt="">
                    {{$newAbout['telp']}}
                </p>
                <p class="w-fit flex mt-4 gap-2 text-left items-center text-sm">
                    <img src="images/location-icon.png" class="w-[23px] h-8" alt="">
                     {{$newAbout['location']}}
                </p>
            </div>
            <div id="right-side">
                <form action="">
                    <div class="flex flex-col text-left gap-3 text-sm font-medium text-gray-600 mb-4">
                        <label for="">Your name</label>
                        <input type="text" name="name" placeholder="Enter your name" class="bg-gray-200 p-2 outline-0 h-10">
                    </div>
                    <div class="flex flex-col text-left gap-3 text-sm font-medium text-gray-600 mb-4">
                        <label for="">Phone Number</label>
                        <input type="text" name="name" placeholder="Enter your mobile number" class="bg-gray-200 p-2 outline-0 h-10">
                    </div>
                    <div class="flex flex-col text-left gap-3 text-sm font-medium text-gray-600 mb-4">
                        <label for="">Your Email</label>
                        <input type="text" name="name" placeholder="Enter your email id" class="bg-gray-200 p-2 outline-0 h-10">
                    </div>
                    <div class="flex flex-col text-left gap-3 text-sm font-medium text-gray-600 mb-4">
                        <label for="">Write your messages here</label>
                        <textarea type="text" name="name" placeholder="Enter your message" class="bg-gray-200 p-2 outline-0 h-25"></textarea>
                    </div>
                     <button class="px-6 py-3 bg-blue-800 text-white font-semibold text-md rounded-3xl flex items-center gap-2 cursor-pointer">Submit now 
                    <img src="images/white-arrow.png" class="w-7 h-4" alt="">
                </button>
                </form>
            </div>

        </div>
    </div>
    {{-- contact ends --}}
@endsection
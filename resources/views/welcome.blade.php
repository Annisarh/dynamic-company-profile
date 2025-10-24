@extends('layouts.app')
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
    <div class="py-4 mt-[78px] text-center">
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
    <div class="py-4 mt-[70px] pl-[10%] pr-[10%]">
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
    <div class="py-4 mt-[70px] pl-[10%] pr-[10%]">
        <div class="text-center">
            <h4 class="font-semibold text-xl text-blue-800 uppercase">TESTIMONIALS</h4>
            <h1 class="font-bold text-4xl">What Student Says</h1>
        </div>
        
    </div>
    {{-- testimonial ends --}}
@endsection
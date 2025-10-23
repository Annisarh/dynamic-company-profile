@extends('layouts.app')
@section('content')
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
@endsection
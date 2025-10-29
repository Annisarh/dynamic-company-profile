@extends('layouts.app')

@section('content')
{{-- navbar start --}}
    <nav class="navbar w-full h-18 text-white py-1 fixed top-0 left-0 flex items-center justify-between z-10 navfix">
        <img src="{{asset('images/logo.png')}}" alt="logo" class="w-[180px]">
        <img id="menu-icon" src="images/menu-icon.png" class="w-10 absolute items-center right-10 sm:hidden" alt="">
        <ul id="nav-bar" class="sm:flex flex-col md:flex-row sm:items-center sm:justify-between fixed top-17 sm:pt-0 pt-5 bottom-0 bg-blue-800 md:bg-transparent md:top-0 md:text-xl md:px-0 md:py-0 right-0 md:relative text-xl px-8 text-left sm:gap-10 space-y-2 sm:opacity-100 opacity-0 sm:space-y-0 transition-all duration-700">
            <li>
                <a href="{{route('company')}}" class="sm:hover:border-b">Home</a>
            </li>
            <li>
                <button class="sm:px-4 sm:py-2 text-xl rounded-3xl sm:bg-white sm:text-black cursor-pointer hover:scale-105">Contact us</button>
            </li>
        </ul>
    </nav>
{{-- navbar ends --}}
    <div class="py-4 mt-10 pl-[20%] pr-[20%]">
        <div class="text-center mb-12">
            <h4 class="font-semibold text-xl text-blue-800 uppercase">Kampus</h4>
            <h1 class="font-bold text-4xl">Articles</h1>
        </div>
        <hr class="h-[3px] bg-red-700">
        <span class="block my-1 text-sm font-base">{{ \Carbon\Carbon::parse($article->created_at)->format('d/m/Y')}}</span>
        <div class="mx-auto mt-4 space-y-4 text-left">
            <h3 class="font-bold text-3xl text-left">{{$article->judul}}</h3>
            <img src="{{asset('storage/'. $article->image)}}" alt="" class="mx-auto">
            <h3 class="text-left text-lg">Author : <span class="font-bold">{{$article->author}}</span></h3>
            <p class="text-lg text-left">
                {!!$article->article!!}
            </p>
        </div>
    </div>
@endsection
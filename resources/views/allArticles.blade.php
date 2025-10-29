@extends('layouts.app')
{{-- navbar start --}}
    <nav class="navbar w-full h-18 text-white py-1 fixed top-0 left-0 flex items-center justify-between z-10 navfix">
        <img src="images/logo.png" alt="logo" class="w-[180px]">
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
@section('content')
    <div class="py-4 mt-10 pl-[10%] pr-[10%]">
        <div class="text-center mb-12">
            <h4 class="font-semibold text-xl text-blue-800 uppercase">Kampus</h4>
            <h1 class="font-bold text-4xl">Articles</h1>
        </div>
        <div class="flex sm:flex-row flex-col gap-8">
            <div class="sm:w-3/5 w-full">
                <div class="flex sm:flex-row flex-col gap-4 text-left group">
                    <div>
                        <h4 class="font-bold text-xl hover:opacity-50"><a href="{{route('companyArticle.view', $articleLatest->id)}}">{{$articleLatest->judul}}</a></h4>
                        <p class="mt-3">{{$articleLatest->excerpt}}</p>
                        <span class="block mt-3 text-sm">{{$articleLatest->created_at->diffForHumans()}}</span>
                    </div>
                     <img src="{{asset('storage/'. $articleLatest->image)}}" class="w-[400px]" alt="">
                </div>
                <div class="grid grid-cols-3 mt-8 gap-4 text-left">
                    @foreach ($articles as $article)
                        @if ($article->id !== $articleLatest->id)
                        <div class="flex flex-col group">
                             <img src="{{asset('storage/'. $article->image)}}" class="w-[200px] mb-3 h-48 object-cover" alt="">
                              <span class="block my-1 text-xs font-base">{{ \Carbon\Carbon::parse($article->created_at)->format('d/m/Y')}}</span>
                             <h4 class="font-bold text-xl group-hover:opacity-50"><a href="{{route('companyArticle.view', $article->id)}}">{{$article->judul}}</a></h4>
                            <p class="mt-3">{{$article->excerpt}}</p>
                        </div>
                        @endif
                    @endforeach
                    {{-- <div class="flex flex-col">
                         <img src="https://ichef.bbci.co.uk/ace/standard/976/cpsprodpb/d5eb/live/a247f350-b3cc-11f0-bcfd-f33aa44e9a1a.jpg.webp" class="w-[200px] mb-3" alt="">
                         <h4 class="font-bold text-xl">Dodgers outlast Blue Jays in World Series epic</h4>
                        <p class="mt-3">Freddie Freeman hit a walk-off home run in the bottom of the 18th inning as the Los Angeles Dodgers took a 2-1 lead in the best-of-seven World Series.</p>
                    </div>
                    <div class="flex flex-col">
                         <img src="https://ichef.bbci.co.uk/ace/standard/976/cpsprodpb/d5eb/live/a247f350-b3cc-11f0-bcfd-f33aa44e9a1a.jpg.webp" class="w-[200px] mb-3" alt="">
                         <h4 class="font-bold text-xl">Dodgers outlast Blue Jays in World Series epic</h4>
                        <p class="mt-3">Freddie Freeman hit a walk-off home run in the bottom of the 18th inning as the Los Angeles Dodgers took a 2-1 lead in the best-of-seven World Series.</p>
                    </div>
                    <div class="flex flex-col">
                         <img src="https://ichef.bbci.co.uk/ace/standard/976/cpsprodpb/d5eb/live/a247f350-b3cc-11f0-bcfd-f33aa44e9a1a.jpg.webp" class="w-[200px] mb-3" alt="">
                         <h4 class="font-bold text-xl">Dodgers outlast Blue Jays in World Series epic</h4>
                        <p class="mt-3">Freddie Freeman hit a walk-off home run in the bottom of the 18th inning as the Los Angeles Dodgers took a 2-1 lead in the best-of-seven World Series.</p>
                    </div>
                    <div class="flex flex-col">
                         <img src="https://ichef.bbci.co.uk/ace/standard/976/cpsprodpb/d5eb/live/a247f350-b3cc-11f0-bcfd-f33aa44e9a1a.jpg.webp" class="w-[200px] mb-3" alt="">
                         <h4 class="font-bold text-xl">Dodgers outlast Blue Jays in World Series epic</h4>
                        <p class="mt-3">Freddie Freeman hit a walk-off home run in the bottom of the 18th inning as the Los Angeles Dodgers took a 2-1 lead in the best-of-seven World Series.</p>
                    </div> --}}
                </div>
            </div>
            <div class="w-full sm:w-2/5 text-left space-y-6">
                 <div class="flex flex-col group">
                        <img src="https://ichef.bbci.co.uk/ace/standard/976/cpsprodpb/d5eb/live/a247f350-b3cc-11f0-bcfd-f33aa44e9a1a.jpg.webp" class="w-[400px] mb-3" alt="">
                         <span class="block my-1 text-xs font-base">{{ \Carbon\Carbon::parse($article->created_at)->format('d/m/Y')}}</span>
                        <div class="w-[90%]">
                            <h4 class="font-bold text-xl group-hover:opacity-50"><a href="{{route('companyArticle.view', $articlesLeft[1]->id)}}">{{ $articlesLeft[1]->judul }}</a></h4>
                            <p class="mt-3">{{ $articlesLeft[1]->excerpt }}</p>
                        </div>
                  </div>
                @foreach ($articlesLeft as $item)
                    @if ($item->id !== $article->id && $articleLatest->id)
                    {{-- {{dd($item)}} --}}
                    <hr>
                    <div class="flex flex-col">
                        <div class="w-[90%]">
                            <h4 class="font-bold text-xl hover:opacity-50"><a href="{{route('companyArticle.view', $item->id)}}">{{$item->judul}}</a></h4>
                             <span class="block my-1 text-xs font-base">{{ \Carbon\Carbon::parse($article->created_at)->format('d/m/Y')}}</span>
                            <p class="mt-3">{{$item->excerpt}}</p>
                        </div>
                    </div>
                    @endif
                @endforeach
                 <hr>
            </div>
        </div>
    </div>
@endsection
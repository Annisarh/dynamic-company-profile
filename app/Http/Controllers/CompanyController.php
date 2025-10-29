<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Program;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $about = About::first();
        $newAbout = $about->toArray();
        // dd($newAbout);
        $newProgram = Program::all();
        $galleries = Gallery::all();
        $alumnies = Testimoni::all();
        $articles = Article::latest()->take(6)->get();
        $articleLatest = Article::latest()->first();
        // dd($articleFirst->judul);
        return view('welcome', compact('newAbout', 'newProgram', 'galleries', 'alumnies', 'articles', 'articleLatest'));
    }

    public function allarticles()
    {
        $articleLatest = Article::latest()->first();
        $articles = Article::all();
        $articlesLeft = Article::latest()->get();
        return view('allArticles', compact('articleLatest', 'articles', 'articlesLeft'));
    }

    public function articleView(Article $article)
    {
        return view('article', compact('article'));
    }
}

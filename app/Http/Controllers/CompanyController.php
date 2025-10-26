<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index()
    {
        $about = About::first();
        $newAbout = $about->toArray();
        // dd($newAbout);
        return view('welcome', compact('newAbout'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function about()
    {
        $datas = About::all();
        return view('admin.about', compact('datas'));
    }
    public function updateabout(Request $request, About $about)
    {
        // dd($request->all());
        // validate data
        $rule = [
            'nama' => 'required|string|min:2|max:255',
            'logo' => 'file|image|mimes:png,jpg,jpeg|max:2048|dimensions:max_width=500,max_height=100',
            'logolama' => 'string',
            'tagline' => 'required|string|min:2|max:255',
            'about' => 'required|string',
            'email' => 'required|string',
            'telp' => 'required|string',
            'location' => 'string',
            'intaname' => 'string',
            'more' => 'required|string',
        ];
        $validateData = $request->validate($rule);
        if ($request->file('logo')) {
            // hapus gambar lama
            if ($request->logolama) {
                Storage::delete($request->logolama);
            }
            $validateData['logo'] = $request->file('logo')->store('images');
        }
        // dd($data);
        $about->update($validateData);
        return redirect()->route('admin.about')->with('success', 'update sukses');
    }

    public function program()
    {
        return view('admin.program');
    }
}

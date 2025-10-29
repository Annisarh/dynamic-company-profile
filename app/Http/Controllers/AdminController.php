<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Gallery;
use App\Models\Program;
use App\Models\Testimoni;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Support\ValidatedData;
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
        $programs = Program::all();
        return view('admin.program', compact('programs'));
    }

    public function programCreate()
    {
        return view('admin.programCreate');
    }
    public function programStore(Request $request)
    {
        $rule = [
            'name' => 'required|string|min:6|max:25',
            'image' => 'required|image|file|mimes:png,jpg,jpeg',
            'deskripsi' => 'string'
        ];
        $validateData = $request->validate($rule);
        $validateData['nameprogram'] = $request->name;
        $validateData['image'] = $request->file('image')->store('images');
        // dd('ok');
        Program::create($validateData);
        return redirect()->route('admin.program')->with('success', 'Program added successfully');
    }
    public function programEdit(Request $request, Program $program)
    {
        // dd($program);
        return view('admin.programEdit', compact('program'));
    }

    public function programUpdate(Request $request, Program $program)
    {
        $rule = [
            'name' => 'required|string|min:6|max:25',
            'image' => 'image|file|mimes:png,jpg,jpeg,avif',
            'deskripsi' => 'string'
        ];
        $validateData = $request->validate($rule);
        if ($request->file('image')) {
            if ($request->oldimage) {
                Storage::delete($request->oldimage);
            }
            $validateData['image'] = $request->file('image')->store('images');
        }
        $validateData['nameprogram'] = $request->name;
        $program->update($validateData);
        return redirect()->route('admin.program')->with('success', 'edit successly');
    }

    public function programDestroy(Program $program)
    {
        $program->delete();
        return redirect()->route('admin.program')->with('success', 'delete Successfully');
    }

    public function gallery()
    {
        $gallery = Gallery::all();
        // dd($gallery);
        return view('admin.gallery.gallery', compact('gallery'));
    }
    public function galleryEdit(Gallery $gallery)
    {
        return view('admin.gallery.galleryEdit', compact('gallery'));
    }
    public function galleryUpdate(Request $request, Gallery $gallery)
    {
        $rule = [
            'imagegall' => 'image|file|mimes:png,jpg,jpeg',
            'deskripsigall' => 'string',
        ];
        $validateData = $request->validate($rule);
        // dd($validateData);
        if ($request->imagegall) {
            if ($request->oldimage) {
                Storage::delete($request->oldimage);
            }
            $validateData['imagegall'] = $request->file('imagegall')->store('images');
        }
        $gallery->update($validateData);
        return redirect()->route('admin.gallery')->with('success', 'edit successly');
    }

    public function testi()
    {
        $testi = Testimoni::all();
        // dd($testi);
        return view('admin.testi.testi', compact('testi'));
    }

    public function testiCreate()
    {
        return view('admin.testi.testiCreate');
    }

    public function testiStore(Request $request, Testimoni $testi)
    {
        // dd($request);
        $rule = [
            'nametesti' => 'required|string|min:2|max:25',
            'profile' => 'required|image|file|mimes:png,jpg,jpeg',
            'asal' => 'required|string|min:5',
            'testi' => 'required|string|min:10',
        ];
        $validateData = $request->validate($rule);
        $validateData['profile'] = $request->file('profile')->store('images');
        // dd($validateData);
        $testi->create($validateData);
        return redirect()->route('admin.testi')->with('success', 'Testi successfuly create');
    }

    public function testiEdit(Testimoni $testi)
    {
        return view('admin.testi.testiEdit', compact('testi'));
    }

    public function testiUpdate(Request $request, Testimoni $testi)
    {
        // dd($request->all());
        $rules = [
            'nametesti' => 'required|string|min:2|max:25',
            'profile' => 'image|file|mimes:png,jpg,jpeg',
            'asal' => 'string',
            'testi' => 'string|min:15'
        ];
        $validateData = $request->validate($rules);
        if ($request->file('profile')) {
            if ($request->profileold) {
                Storage::delete($request->profileold);
            }
            $validateData['profile'] = $request->file('profile')->store('images');
        }
        $testi->update($validateData);
        return redirect()->route('admin.testi')->with('success', 'successly updated');
    }

    public function testiDestroy(Testimoni $testi)
    {
        $testi->delete();
        return redirect()->route('admin.testi')->with('success', 'delete successfuly');
    }

    public function articles()
    {
        $articles = Article::all();
        // dd($articles);
        return view('admin.articles.articles', compact('articles'));
    }
    public function articlesCreate()
    {
        return view('admin.articles.articlesCreate');
    }

    public function articlesStore(Request $request, Article $article)
    {
        // dd($request->all());
        $rules = [
            'judul' => 'required|string|min:5',
            'image' => 'required|file|mimes:png,jpg,jpeg,avif',
            'author' => 'required|string',
            'article' => 'required',
        ];
        $validateData = $request->validate($rules);
        $validateData['image'] = $request->file('image')->store('images');
        $validateData['excerpt'] = Str::limit(strip_tags($request->article), 180);
        // dd($validateData);
        $article->create($validateData);
        return redirect()->route('admin.articles')->with('success', 'article success ditambahkan');
    }

    public function articlesView(Article $article)
    {
        // dd($article);
        return view('admin.articles.articlesView', compact('article'));
    }

    public function articlesEdit(Article $article)
    {
        // dd($article);
        return view('admin.articles.articlesEdit', compact('article'));
    }

    public function articlesUpdate(Request $request, Article $article)
    {
        // dd($request->all());
        $rules = [
            'judul' => 'required|string|min:5',
            'image' => 'file|mimes:png,jpg,jpeg,avif',
            'author' => 'required|string',
            'article' => 'required',
        ];
        $validateData = $request->validate($rules);
        if ($request->image) {
            if ($request->imageold) {
                Storage::delete($request->imageold);
            }
            $validateData['image'] = $request->file('image')->store('images');
        }

        $validateData['excerpt'] = Str::limit(strip_tags($article->article), 180);
        // dd($validateData);
        $article->update($validateData);
        return redirect()->route('admin.articles')->with('success', 'Successfuly update');
    }
    public function articlesDestroy(Article $article)
    {
        $article->delete();
        return redirect()->route('admin.articles')->with('success', 'delete Successfully');
    }
}

@extends('admin.layouts.baseLayouts')
@section('content')
    <h2 class="mb-3">Halaman View Article</h2>
    <a href="{{route('admin.articles')}}" class="btn btn-success">Kembali</a>
    <a href="{{route('admin.articles.edit', $article->id)}}" class="btn btn-warning">Edit</a>
    <form action="{{route('admin.articles.delete', $article->id)}}" method="post" class="mt-3 d-inline">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('yakin mau delete?')">Hapus</button>
    </form>
    <hr>
    <h4 class="fw-bold">{{$article->judul}}</h4>
    <div class="row mb-3">
        <div class="col-md-6">
            <span>Autho : {{$article->author}}</span>
        </div>
    </div>
    <div class="row">
        <img src="{{asset('storage/'. $article->image)}}" style="max-width: 400px; max-height: 350px; overflow: hidden;" class="mr-3" alt="">
        <article>
            {!! $article->article !!}
        </article>
    </div>

@endsection
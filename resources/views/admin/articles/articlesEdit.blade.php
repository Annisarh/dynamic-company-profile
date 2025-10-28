@extends('admin.layouts.baseLayouts')
@section('content')
    <h3>Data Articles Edit</h3>
        <form action="{{route('admin.articles.update', $article->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Judul Article</label>
                        <input type="text" name="judul" class="form-control @error('judul')
                            is-invalid
                        @enderror" value="{{old('judul', $article->judul)}}">
                        @error('judul')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image Article</label>
                        <img src="{{asset('storage/'. $article->image)}}" alt="" class="d-block mb-3" style="max-width: 200px; max-height: 250px; overflow: hidden;">
                        <input type="hidden" name="imageold" value="{{$article->image}}">
                        <input type="file" name="image" class="form-control @error('image')
                            is-invalid
                        @enderror">
                        @error('image')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Author Article</label>
                        <input type="text" name="author" class="form-control @error('author')
                            is-invalid
                        @enderror" value="{{old('author', $article->author)}}">
                        @error('author')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Article</label>
                        <input id="article" type="hidden" name="article" value="{{old('article', $article->article)}}">
                        <trix-editor input="article" required class="@error('article')
                            is-invalid
                        @enderror"></trix-editor>
                        @error('article')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-3">Update</button>
            <button type="reset" class="btn btn-warning">Batal</button>
        </form>
@endsection
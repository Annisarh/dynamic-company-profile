@extends('admin.layouts.baseLayouts')
@section('content')
    <h3>About Educity</h3>
    @session('success')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>
        <button type="button" class="btn btn-close" aria-label="Close"></button>
     </div>
    @endsession
    @foreach ($datas as $data)
        {{-- {{dd($data->nama)}} --}}
        <form action="{{route('admin.aboutUpdate', $data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Company</label>
                        <input type="text" name="nama" class="form-control @error('nama')
                            is-invalid
                        @enderror" value="{{old('nama', $data->nama )}}">
                        @error('nama')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Logo Company</label>
                        <div style="max-width: 500px; max-height: 100px; overflow: hidden;" class="mb-3">
                            <img src="storage/{{$data->logo}}" class="bg-dark mb-3" alt="">
                        </div>
                        <input type="hidden" name="logolama" value="{{$data->logo}}">
                        <input type="file" name="logo" class="form-control @error('logo')
                            is-invalid
                        @enderror">
                        @error('logo')
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
                        <label for="exampleInputEmail1" class="form-label">Tagline Company</label>
                        <input type="text" name="tagline" class="form-control @error('tagline')
                            is-invalid
                        @enderror" value="{{old('tagline', $data->tagline)}}">
                         @error('tagline')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">About Company</label>
                       <textarea name="about" rows="3" class="form-control @error('about')
                            is-invalid
                        @enderror text-left" style="text-align: left">
                            {{old('about', $data->about)}}
                       </textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email Company</label>
                        <input type="email" name="email" class="form-control @error('email')
                            is-invalid
                        @enderror" value="{{old('email', $data->email)}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Telp Company</label>
                        <input type="text" name="telp" class="form-control @error('telp')
                            is-invalid
                        @enderror" value="{{old('telp', $data->telp)}}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Inta name Company</label>
                        <input type="text" name="intaname" class="form-control @error('telp')
                            is-invalid
                        @enderror" value="{{old('intaname', $data->intaname)}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">More About Company</label>
                       <textarea name="more" rows="3" class="form-control @error('more')
                            is-invalid
                        @enderror text-left" style="text-align: left">
                            {{old('more', $data->more)}}
                       </textarea>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    @endforeach
@endsection
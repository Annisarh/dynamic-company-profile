@extends('admin.layouts.baseLayouts')
@section('content')
    <h3>Data Program</h3>
        <form action="{{route('admin.program.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Program</label>
                        <input type="text" name="name" class="form-control @error('name')
                            is-invalid
                        @enderror" value="{{old('name')}}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image Program</label>
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
                        <label for="exampleInputEmail1" class="form-label">Deskripsi Program</label>
                        <input type="text" name="deskripsi" class="form-control @error('deskripsi')
                            is-invalid
                        @enderror" value="{{old('deskripsi')}}">
                         @error('deskripsi')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-3">Simpan</button>
            <button type="reset" class="btn btn-warning">Batal</button>
        </form>
@endsection
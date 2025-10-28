@extends('admin.layouts.baseLayouts')
@section('content')
    <h3>Data Alumnis</h3>
        <form action="{{route('admin.testi.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Alumnis</label>
                        <input type="text" name="nametesti" class="form-control @error('nametesti')
                            is-invalid
                        @enderror" value="{{old('nametesti')}}">
                        @error('nametesti')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Profile Alumni</label>
                        <input type="file" name="profile" class="form-control @error('profile')
                            is-invalid
                        @enderror">
                        @error('profile')
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
                        <label for="exampleInputEmail1" class="form-label">Asal Alumnis</label>
                        <input type="text" name="asal" class="form-control @error('asal')
                            is-invalid
                        @enderror" value="{{old('asal')}}">
                         @error('asal')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Kata Alumnis</label>
                        <textarea type="text" name="testi" class="form-control @error('testi')
                            is-invalid
                        @enderror" value="{{old('testi')}}"></textarea>
                         @error('testi')
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
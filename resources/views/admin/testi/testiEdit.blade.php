@extends('admin.layouts.baseLayouts');
@section('content')
    <h3>Data Alumnis</h3>
        <form action="{{route('admin.testi.update', $testi->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Alumnis</label>
                        <input type="text" name="nametesti" class="form-control @error('nametesti')
                            is-invalid
                        @enderror" value="{{old('nametesti', $testi->nametesti)}}">
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
                        <img src="{{asset('storage/images/'. $testi->profile)}}" alt="" class="d-block mb-3">
                        <input type="hidden" name="profileold" value="{{$testi->profile}}">
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
                        @enderror" value="{{old('asal', $testi->asal)}}">
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
                        <textarea name="testi" class="form-control @error('testi')
                            is-invalid
                        @enderror">{{old('testi', $testi->testi)}}</textarea>
                         @error('testi')
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
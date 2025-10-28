@extends('admin.layouts.baseLayouts')
@section('content')
    <h3>Edit Foto Gallery</h3>
        <form action="{{route('admin.gallery.update', $gallery->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image Gallery</label>
                        <img src="{{asset('storage/images/'. $gallery->imagegall)}}" class="d-block mb-3" alt="" style="width: 250px; height: 250px;">
                        <input type="hidden" name="oldimage" value="{{$gallery->image}}" id="">
                        <input type="file" name="imagegall" class="form-control @error('imagegall')
                            is-invalid
                        @enderror">
                        @error('imagegall')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Deskripsi Gallery</label>
                        <input type="text" name="deskripsigall" class="form-control @error('deskripsigall')
                            is-invalid
                        @enderror" value="{{old('deskripsigall', $gallery->deskripsigall)}}">
                         @error('deskripsigall')
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
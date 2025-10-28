@extends('admin.layouts.baseLayouts')
@section('content')
    <h2>Gallery halaman</h2>
    @session('success')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>
        <button type="button" class="btn btn-close" aria-label="Close"></button>
     </div>
    @endsession
    <div class="container text-center">
        <div class="row p-5 m-3">
            @foreach ($gallery as $item)
            <div class="col-md-4 p-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{asset('storage/images/'. $item->imagegall)}}" alt="Card image cap">
                    <div class="card-body text-left">
                        <p class="card-text">{{$item->deskripsigall}}</p>
                        <a href="{{route('admin.gallery.edit', $item->id)}}" class="btn btn-primary">Edit</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
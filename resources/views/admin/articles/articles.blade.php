@extends('admin.layouts.baseLayouts')
@section('content')
  <h2>Articles halaman</h2>
    @session('success')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>
        <button type="button" class="btn btn-close" aria-label="Close"></button>
     </div>
    @endsession
    <div>
        <a href="{{route('admin.articles.create')}}" class="btn btn-outline-primary mb-3">Tambah Articles</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <table class="table border table-striped">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">JuduL Article</th>
                        {{-- <th scope="col">Image</th> --}}
                        <th scope="col">Author</th>
                        {{-- <th scope="col">Article</th> --}}
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   @forelse ($articles as $item )
                   <tr>
                       <th scope="row">{{$loop->iteration}}</th>
                       <td>{{$item->judul}}</td>
                       {{-- <td>
                            <img src="storage/images/{{$item->image}}" alt="">
                       </td> --}}
                       <td>{{$item->author}}</td>
                       {{-- <td>{{$item->article}}</td> --}}
                       <td class="text-center">
                            <a href="{{route('admin.articles.view', $item->id)}}" class="btn btn-outline-info">View</a>
                            <a href="{{route('admin.articles.edit', $item->id)}}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{route('admin.articles.delete', $item->id)}}" method="post" class="mt-3">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('yakin mau delete?')">Hapus</button>
                            </form>
                       </td>
                   </tr> 
                   @empty
                    <tr>
                        <td colspan="5">Data Tidak Ada</td>
                    </tr>
                   @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
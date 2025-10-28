@extends('admin.layouts.baseLayouts')
@section('content')
    <h2>Testimonis halaman</h2>
    @session('success')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>
        <button type="button" class="btn btn-close" aria-label="Close"></button>
     </div>
    @endsession
    <div>
        <a href="{{route('admin.testi.create')}}" class="btn btn-outline-primary mb-3">Tambah Testimonis</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <table class="table border table-striped">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Alumni</th>
                        <th scope="col">Profile</th>
                        <th scope="col">Asal</th>
                        <th scope="col">what alumni say</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   @forelse ($testi as $item )
                   <tr>
                       <th scope="row">{{$loop->iteration}}</th>
                       <td>{{$item->nametesti}}</td>
                       <td>
                            <img src="storage/images/{{$item->profile}}" alt="">
                       </td>
                       <td>{{$item->asal}}</td>
                       <td>{{$item->testi}}</td>
                       <td class="text-center">
                            <a href="{{route('admin.testi.edit', $item->id)}}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{route('admin.testi.delete', $item->id)}}" method="post" class="mt-3">
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
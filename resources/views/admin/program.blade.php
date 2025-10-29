@extends('admin.layouts.baseLayouts')
@section('content')
    <h2>Program halaman</h2>
    @session('success')
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>
        <button type="button" class="btn btn-close" aria-label="Close"></button>
     </div>
    @endsession
    <div>
        <a href="{{route('admin.program.create')}}" class="btn btn-outline-primary mb-3">Tambah Program</a>
    </div>
    <div class="row">
        <div class="col-md-10">
            <table class="table border table-striped">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Program</th>
                        <th scope="col">Image</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                   @forelse ($programs as $program )
                   <tr>
                       <th scope="row">{{$loop->iteration}}</th>
                       <td>{{$program->nameprogram}}</td>
                       <td>
                            <img src="storage/{{$program->image}}" style="max-width: 250px;">
                       </td>
                       <td>{{$program->deskripsi}}</td>
                       <td>
                            <a href="{{route('admin.program.show', $program->id)}}" class="btn btn-outline-warning">Edit</a>
                            <form action="{{route('admin.program.delete', $program->id)}}" method="post" class="d-inline">
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
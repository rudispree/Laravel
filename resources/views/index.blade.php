@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="col-lg-8">
            <h1>Crud Laravel</h1>
            <a href="{{ url('create') }}" class="btn btn-primary">+ Tambah Data Mahasiswa</a>
        </div>

        <div class="col-lg-8 mt-5">
            <table class="table table-light">
                <tbody>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>No Hp</td>
                        <td>Alamat</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($data as $dataPelanggan)
                    <tr>
                        <td>{{ $dataPelanggan->id }}</td>
                        <td>{{ $dataPelanggan->nama }}</td>
                        <td>{{ $dataPelanggan->email}}</td>
                        <td>{{ $dataPelanggan->no_hp}}</td>
                        <td>{{ $dataPelanggan->alamat}}</td>
                        <td>
                            <a href="{{url('/show/'.$dataPelanggan->id)}}" class="btn btn-warning">Edit</a>
                            <a href="{{url('/destroy/'. $dataPelanggan->id)}}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
</div>
@endsection
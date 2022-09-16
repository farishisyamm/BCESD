@extends('layouts.main')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="/tambah" class="btn btn-success">Tambah Data Mahasiswa</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12">
                <div class="card">
                    <h5 class="card-header">Data Mahasiswa</h5>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">NIM</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Jurusan</th>
                                    <th scope="col">Angkatan</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            @foreach($mahasiswa as $m)
                            <tbody>
                                <tr>
                                    <td>{{$m->nim}}</td>
                                    <td>{{$m->nama}}</td>
                                    <td>{{$m->jurusan}}</td>
                                    <td>{{$m->angkatan}}</td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-warning" href="/{{$m->id}}/ubah">Ubah</a>
                                            <form action="/{{$m->id}}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input class="btn btn-danger" type="submit" value="Delete" onclick="confirm('Yakin?')">
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
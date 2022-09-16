@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="/" class="btn btn-success">Kembali</a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Tambah Mahasiswa</h5>
                <div class="card-body">
                    <form action="/simpan" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputnim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="exampleInputnim" name="nim" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputnim" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="exampleInputnim" name="nama" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputnim" class="form-label">Jurusan</label>
                            <input type="text" class="form-control" id="exampleInputnim" name="jurusan" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputnim" class="form-label">Angkatan</label>
                            <input type="text" class="form-control" id="exampleInputnim" name="angkatan" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-primary">Reset</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
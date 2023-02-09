@extends('index')
@section('title', 'Mahasiswa')

@section('isihalaman')
<br />
<h3><center>Daftar Mahasiswa Perpustakaan Universitas Islam Balitar</center></h3>
<br />
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMahasiswaTambah"> 
    Tambah Data Mahasiswa
</button>
<br />
<p>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <td align="center">No</td>
            <td align="center">ID Mahasiswa</td>
            <td align="center">NIM</td>
            <td align="center">Nama Mahasiswa</td>
            <td align="center">Prodi</td>
            <td align="center">No. Hp</td>
            <td align="center">Aksi</td>
        </tr>
    </thead>

    <tbody>
        @foreach ($mahasiswa as $index=>$sw)
            <tr>
                <td align="center" scope="row">{{ $index + $mahasiswa->firstItem() }}</td>
                <td>{{$sw->idmahasiswa}}</td>
                <td>{{$sw->nim}}</td>
                <td>{{$sw->nama}}</td>
                <td>{{$sw->prodi}}</td>
                <td>{{$sw->nohp}}</td>
                <td align="center">
                    
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalMahasiswaEdit{{$sw->idmahasiswa}}"> 
    Edit
</button>

<!-- Awal Modal EDIT data Mahasiswa -->
<div class="modal fade" id="modalMahasiswaEdit{{$sw->idmahasiswa}}" tabindex="-1" role="dialog" aria-labelledby="modalMahasiswaEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalMahasiswaEditLabel">Form Edit Data Mahasiswa</h5>
            </div>
            <div class="modal-body">

                <form name="formmahasiswaedit" id="formmahasiswaedit" action="/mahasiswa/edit/{{ $sw->idmahasiswa}} " method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group row">
                        <label for="nim" class="col-sm-4 col-form-label">NIM</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nim" name="nim" value="{{ $sw->nim}}">
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $sw->nama}}">
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="prodi" class="col-sm-4 col-form-label">Prodi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="prodi" name="prodi" value="{{ $sw->prodi}}">
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-4 col-form-label">No. Hp</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nohp" name="nohp" value="{{ $sw->nohp}}">
                        </div>
                    </div>

                    <p>
                    <div class="modal-footer">
                        <button type="button" name="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="mahasiswatambah" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal EDIT data Mahasiswa -->
                    |
                    <a href="mahasiswa/hapus/{{$sw->idmahasiswa}}" onclick="return confirm('Yakin mau dihapus?')">
                        <button class="btn btn-danger">
                            Delete
                        </button>
                    </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!--awal pagination--><br />
Halaman : {{ $mahasiswa->currentPage() }} <br />
Jumlah Data : {{ $mahasiswa->total() }} <br />
Data Per Halaman : {{ $mahasiswa->perPage() }} <br />

{{ $mahasiswa->links() }}
<!--akhir pagination-->

<!-- Awal Modal tambah data Mahasiswa -->
<div class="modal fade" id="modalMahasiswaTambah" tabindex="-1" role="dialog" aria-labelledby="modalMahasiswaTambahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalMahasiswaTambahLabel">Form Input Data Mahasiswa</h5>
            </div>
            <div class="modal-body">

                <form name="formmahasiswatambah" id="formmahasiswatambah" action="/mahasiswa/tambah " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="nim" class="col-sm-4 col-form-label">NIM</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM">
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="nama" class="col-sm-4 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Mahasiswa">
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="prodi" class="col-sm-4 col-form-label">Prodi</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="prodi" name="prodi" placeholder="Masukan Prodi">
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="nohp" class="col-sm-4 col-form-label">No. Hp</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Masukan No. Hp">
                        </div>
                    </div>

                    <p>
                    <div class="modal-footer">
                        <button type="button" name="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="mahasiswatambah" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal tambah data mahasiswa -->
    
@endsection
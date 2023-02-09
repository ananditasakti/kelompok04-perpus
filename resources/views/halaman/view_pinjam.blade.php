@extends('index')
@section('title', 'Buku')

@section('isihalaman')
<br />
    <h3><center>Data Peminjaman Buku</center><h3>
    <h3><center>Perpustakaan Universitas Islam Balitar</center></h3>
<br />
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPinjamTambah"> 
        Tambah Data Peminjaman 
    </button>
<br />
    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID Pinjam</td>
                <td align="center">Nama Petugas</td>
                <td align="center">Nama Mahasiswa</td>
                <td align="center">Judul Buku</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($pinjam as $index=>$p)
                <tr>
                    <td align="center" scope="row">{{ $index + $pinjam->firstItem() }}</td>
                    <td align="center">{{$p->idpinjam}}</td>
                    <td>{{$p->petugas->namapetugas}}</td>
                    <td>{{$p->mahasiswa->nama}}</td>
                    <td>{{$p->buku->judul}}</td>
                    <td align="center">
                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPinjamEdit{{$p->idpinjam}}"> 
                            Edit
                        </button>
                        |
                        <a href="pinjam/hapus/{{$p->idpinjam}}" onclick="return confirm('Yakin mau dihapus?')">
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!--awal pagination-->
    Halaman : {{ $pinjam->currentPage() }} <br />
    Jumlah Data : {{ $pinjam->total() }} <br />
    Data Per Halaman : {{ $pinjam->perPage() }} <br />

    {{ $pinjam->links() }}
    <!--akhir pagination-->
  
    <!-- Awal Modal tambah data Peminjaman -->
<div class="modal fade" id="modalPinjamTambah" tabindex="-1" role="dialog" aria-labelledby="modalPinjamTambahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPinjamTambahLabel">Form Input Data Peminjaman</h5>
            </div>
            <div class="modal-body">

                <form name="formpinjamtambah" id="formpinjamtambah" action="/pinjam/tambah " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="idpetugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="idpetugas" name="idpetugas" placeholder="Pilih Nama Petugas">
                                <option></option>
                                @foreach($petugas as $ptg)
                                    <option value="{{ $ptg->idpetugas }}">{{ $ptg->namapetugas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="idmahasiswa" class="col-sm-4 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="idahasiswa" name="idmahasiswa" placeholder="Pilih Nama Mahasiswa">
                                <option></option>
                                @foreach($mahasiswa as $s)
                                    <option value="{{ $s->idmahasiswa }}">{{ $s->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="idbuku" class="col-sm-4 col-form-label">Judul Buku</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="idbuku" name="idbuku" placeholder="Pilih Judul Buku">
                                <option></option>
                                @foreach($buku as $bk)
                                    <option value="{{ $bk->idbuku }}">{{ $bk->judul }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="modal-footer">
                        <button type="button" name="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="pinjamtambah" class="btn btn-success">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal tambah data Peminjaman -->
    
<!-- Awal Modal EDIT data Peminjaman -->
@foreach($pinjam as $p)
<div class="modal fade" id="modalPinjamEdit{{$p->idpinjam}}" tabindex="-1" role="dialog" aria-labelledby="modalPinjamEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPinjamEditLabel">Form Edit Data Peminjaman</h5>
            </div>
            <div class="modal-body">

                <form name="formpinjamedit" id="formpinjamedit" action="/pinjam/edit/{{ $p->idpinjam}} " method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group row">
                        <label for="idpinjam" class="col-sm-4 col-form-label">ID Pinjam</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="idpinjam" name="idpinjam" value="{{ $p->idpinjam}}" readonly>
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="petugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="idpetugas" name="idpetugas">
                                @foreach ($petugas as $ptg)
                                    @if ($ptg->idpetugas == $p->idpetugas)
                                        <option value="{{ $ptg->idpetugas }}" selected>{{ $ptg->namapetugas }}</option>
                                    @else
                                        <option value="{{ $ptg->idpetugas }}">{{ $ptg->namapetugas }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="mahasiswa" class="col-sm-4 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="idmahasiswa" name="idmahasiswa">
                                @foreach ($mahasiswa as $s)
                                    @if ($s->idmahasiswa == $p->idmahasiswa)
                                        <option value="{{ $s->idmahasiswa }}" selected>{{ $s->nama }}</option>
                                    @else
                                        <option value="{{ $s->idmahasiswa }}">{{ $s->nama }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="judul" class="col-sm-4 col-form-label">Judul Buku</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="idbuku" name="idbuku">
                                @foreach ($buku as $bk)
                                    @if ($bk->idbuku == $p->idbuku)
                                        <option value="{{ $bk->idbuku }}" selected>{{ $bk->judul }}</option>
                                    @else
                                        <option value="{{ $bk->idbuku }}">{{ $bk->judul }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="modal-footer">
                        <button type="button" name="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="pinjamtambah" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endforeach
<!-- Akhir Modal EDIT data Peminjaman -->
@endsection
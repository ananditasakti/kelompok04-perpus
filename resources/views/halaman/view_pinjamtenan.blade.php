@extends('peminjam')
@section('title', 'Buku')

@section('isiuser')
<br />
    <h3><center>Peminjaman Buku</center><h3>
    <h3><center>Perpustakaan Teknik Informatika</center></h3>
    <h3><center>Universitas Islam Balitar</center></h3>
    <br />
<div class="row">
@foreach ($buku as $index=>$bk)
        <div class="col-6">
            <div class="cards">
            <table id="buku" class="table table-bordered table-striped">
                <thead class="blck">
                    <div class="container">
                    <tr>
                        <th rowspan="5" valign="top" width="100px"><img src="/gambar/{{ $bk->gambar }}" width="150px" height="100%"></th>
                            </tr><tr>    
                            <td class="grds" valign="middle">Kode Buku</td>
                            <td class="grds2" valign="middle">{{$bk->kodebuku}}</td>
                            </tr><tr>
                            <td class="grds" valign="middle">Judul Buku</td>
                            <td class="grds2" valign="middle">{{$bk->judul}}</td>
                            </tr><tr>
                            <td class="grds" valign="middle">Pengarang</td>
                            <td class="grds2" valign="middle">{{$bk->pengarang}}</td>
                            </tr><tr>
                            <td class="grds" valign="middle">Penerbit</td>
                            <td class="grds2" valign="middle">{{$bk->penerbit}}</td>
                        </tr>
                    </div>
                </thead>
            </table>
            </div>
        </div> @endforeach
    </div>
    <br />
    <button id="akupinjam" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPinjamTambah"> 
        Pinjam Buku 
    </button>
<br />
<br />
  
    <!-- Awal Modal tambah data Peminjaman -->
<div class="modal fade" id="modalPinjamTambah" tabindex="-1" role="dialog" aria-labelledby="modalPinjamTambahLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPinjamTambahLabel">Form Input Data Peminjaman</h5>
            </div>
            <div class="modal-body">

                <form name="formpinjamtambah" id="formpinjamtambah" action="/pinjamtenan/tambah " method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label for="idpetugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="idpetugas" name="idpetugas" placeholder="Pilih Nama Petugas">
                                <option></option>
                                @foreach($petugas as $pt)
                                    <option value="{{ $pt->idpetugas }}">{{ $pt->namapetugas }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="idmahasiswa" class="col-sm-4 col-form-label">Nama Mahasiswa</label>
                        <div class="col-sm-8">
                            <select type="text" class="form-control" id="idmahasiswa" name="idmahasiswa" placeholder="Pilih Nama Mahasiswa">
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
    
@endsection
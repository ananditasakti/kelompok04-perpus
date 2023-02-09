@extends('index')
@section('title', 'Petugas')

@section('isihalaman')
<br/>
    <h3><center>Daftar Petugas Perpustakaan Universitas Islam Balitar</center></h3>
<br />
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalPetugasTambah"> 
        Tambah Data Petugas 
    </button>
<br />
    <p>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td align="center">No</td>
                <td align="center">ID Petugas</td>
                <td align="center">Nama Petugas</td>
                <td align="center">No. Hp</td>
                <td align="center">Aksi</td>
            </tr>
        </thead>

        <tbody>
            @foreach ($petugas as $index=>$ptg)
                <tr>
                    <td align="center" scope="row">{{ $index + $petugas->firstItem() }}</td>
                    <td>{{$ptg->idpetugas}}</td>
                    <td>{{$ptg->namapetugas}}</td>
                    <td>{{$ptg->notlp}}</td>
                    <td align="center">
                        
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#modalPetugasEdit{{$ptg->idpetugas}}"> 
    Edit
</button>

<!-- Awal Modal EDIT data Petugas -->
<div class="modal fade" id="modalPetugasEdit{{$ptg->idpetugas}}" tabindex="-1" role="dialog" aria-labelledby="modalPetugasEditLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalPetugasEditLabel">Form Edit Data Petugas</h5>
            </div>
            <div class="modal-body">

                <form name="formpetugasedit" id="formpetugasedit" action="/petugas/edit/{{ $ptg->idpetugas}} " method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group row">
                        <label for="idpetugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="namapetugas" name="namapetugas" value="{{ $ptg->namapetugas}}">
                        </div>
                    </div>

                    <p>
                    <div class="form-group row">
                        <label for="notlp" class="col-sm-4 col-form-label">No. Hp</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="notlp" name="notlp" value="{{ $ptg->notlp}}">
                        </div>
                    </div>

                    <p>
                    <div class="modal-footer">
                        <button type="button" name="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" name="petugastambah" class="btn btn-success">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Modal EDIT data buku -->
                        |
                        <a href="petugas/hapus/{{$ptg->idpetugas}}" onclick="return confirm('Yakin mau dihapus?')">
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
    Halaman : {{ $petugas->currentPage() }} <br />
    Jumlah Data : {{ $petugas->total() }} <br />
    Data Per Halaman : {{ $petugas->perPage() }} <br />

    {{ $petugas->links() }}
    <!--akhir pagination-->

    <!-- Awal Modal tambah data Petugas -->
    <div class="modal fade" id="modalPetugasTambah" tabindex="-1" role="dialog" aria-labelledby="modalPetugasTambahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalPetugasTambahLabel">Form Input Data Petugas</h5>
                </div>
                <div class="modal-body">

                    <form name="formpetugastambah" id="formpetugastambah" action="/petugas/tambah " method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="idpetugas" class="col-sm-4 col-form-label">Nama Petugas</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="namapetugas" name="namapetugas" placeholder="Masukan Nama Petugas">
                            </div>
                        </div>

                        <p>
                        <div class="form-group row">
                            <label for="notlp" class="col-sm-4 col-form-label">No. Hp</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="notlp" name="notlp" placeholder="Masukan No. Hp">
                            </div>
                        </div>

                        <p>
                        <div class="modal-footer">
                            <button type="button" name="tutup" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" name="petugastambah" class="btn btn-success">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Modal tambah data petugas -->
    
@endsection
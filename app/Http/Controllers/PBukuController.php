<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//memanggil model PinjamModel
use App\Models\PinjamModel;

//memanggil model PetugasModel
use App\Models\PetugasModel;

//memanggil model MahasiswaModel
use App\Models\MahasiswaModel;

//memanggil model BukuModel
use App\Models\BukuModel;

class PBukuController extends Controller
{
    //method untuk tampil data peminjaman -index
    public function pinjamtampil()
    {
        $datapinjam = PinjamModel::orderby('idpinjam', 'ASC')
        ->paginate(5);

        $datapetugas    = PetugasModel::all();
        $datamahasiswa  = MahasiswaModel::all();
        $databuku       = BukuModel::all();

        return view('halaman/view_pinjamtenan',['pinjam'=>$datapinjam,'petugas'=>$datapetugas,'mahasiswa'=>$datamahasiswa,'buku'=>$databuku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    //method untuk tambah data peminjaman -store
    public function pinjamtambah(Request $request)
    {
        $this->validate($request, [
            'idpetugas' => 'required',
            'idmahasiswa' => 'required',
            'idbuku' => 'required'
        ]);

        PinjamModel::create([
            'idpetugas' => $request->idpetugas,
            'idmahasiswa' => $request->idmahasiswa,
            'idbuku' => $request->idbuku
        ]);
        return redirect('/pinjamtenan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    //method untuk edit data peminjaman -update
    public function pinjamedit(Request $request, $idpinjam)
    {
        $this->validate($request, [
            'idpetugas' => 'required',
            'idmahasiswa' => 'required',
            'idbuku' => 'required'
        ]);

        $idpinjam = PinjamModel::find($idpinjam);
        $idpinjam->idpetugas    = $request->idpetugas;
        $idpinjam->idmahasiswa      = $request->idmahasiswa;
        $idpinjam->idbuku       = $request->idbuku;

        $idpinjam->save();

        return redirect()->back();
    }

    //method untuk hapus data peminjaman -destroy
    public function pinjamhapus($idpinjam)
    {
        $datapinjam=PinjamModel::find($idpinjam);
        $datapinjam->delete();

        return redirect()->back();
    }
}

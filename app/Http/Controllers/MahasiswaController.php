<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model MahasiswaModel
use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{
    //method untuk tampil data mahasiswa -index
    public function mahasiswatampil()
    {
        $datamahasiswa = MahasiswaModel::orderby('idmahasiswa', 'ASC')
        ->paginate(5);

        return view('halaman/view_mahasiswa',['mahasiswa'=>$datamahasiswa]);
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

    //method untuk tambah data mahasiswa -store
    public function mahasiswatambah(Request $request)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'nohp' => 'required',
        ]);

        MahasiswaModel::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
            'nohp' => $request->nohp,
        ]);

        return redirect('/mahasiswa');
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

    //method untuk edit data mahasiswa -update
    public function mahasiswaedit(Request $request, $idmahasiswa)
    {
        $this->validate($request, [
            'nim' => 'required',
            'nama' => 'required',
            'prodi' => 'required',
            'nohp' => 'required',
        ]);
    
        $idmahasiswa = MahasiswaModel::find($idmahasiswa);
        $idmahasiswa->nim   = $request->nim;
        $idmahasiswa->nama  = $request->nama;
        $idmahasiswa->prodi = $request->prodi;
        $idmahasiswa->nohp    = $request->nohp;
    
        $idmahasiswa->save();
    
        return redirect()->back();
    }

    //method untuk hapus data mahasiswa -destroy
    public function mahasiswahapus($idmahasiswa)
    {
        $datamahasiswa=MahasiswaModel::find($idmahasiswa);
        $datamahasiswa->delete();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model PetugasModel
use App\Models\PetugasModel;

class PetugasController extends Controller
{
    //method untuk tampil data petugas -index
    public function petugastampil()
    {
        $datapetugas = PetugasModel::orderby('idpetugas', 'ASC')
        ->paginate(5);

        return view('halaman/view_petugas',['petugas'=>$datapetugas]);
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

    //method untuk tambah data petugas -store
    public function petugastambah(Request $request)
    {
        $this->validate($request, [
            'namapetugas' => 'required',
            'notlp' => 'required'
        ]);

        PetugasModel::create([
            'namapetugas' => $request->namapetugas,
            'notlp' => $request->notlp,
        ]);

        return redirect('/petugas');
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

    //method untuk edit data petugas -update
    public function petugasedit(Request $request, $idpetugas)
    {
        $this->validate($request, [
            'namapetugas' => 'required',
            'notlp' => 'required'
        ]);
    
        $idpetugas = PetugasModel::find($idpetugas);
        $idpetugas->namapetugas   = $request->namapetugas;
        $idpetugas->notlp          = $request->notlp;
    
        $idpetugas->save();
    
        return redirect()->back();
    }

    //method untuk hapus data petugas -destroy
    public function petugashapus($idpetugas)
    {
        $datapetugas=PetugasModel::find($idpetugas);
        $datapetugas->delete();

        return redirect()->back();
    }
}

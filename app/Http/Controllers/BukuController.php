<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model BukuModel
use App\Models\BukuModel;

class BukuController extends Controller
{
    //method untuk tampil data buku -index
    public function bukutampil()
    {
        $databuku = BukuModel::orderby('idbuku', 'ASC')
        ->paginate(5);

        return view('halaman/view_buku',['buku'=>$databuku]);
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

    //method untuk tambah data buku -store
    public function bukutambah(Request $request)
    {
        $this->validate($request, [
            'kodebuku' => 'required',
            'gambar' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required'
        ]);

        BukuModel::create([
            'kodebuku' => $request->kodebuku,
            'gambar' => $request->gambar,
            'judul' => $request->judul,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit
        ]);

        return redirect('/buku');
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

    //method untuk edit data buku -update
    public function bukuedit(Request $request, $idbuku)
    {
        $this->validate($request, [
            'kodebuku' => 'required',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required'
        ]);
    
        $idbuku = BukuModel::find($idbuku);
        $idbuku->kodebuku   = $request->kodebuku;
        $idbuku->judul      = $request->judul;
        $idbuku->pengarang  = $request->pengarang;
        $idbuku->penerbit   = $request->penerbit;
    
        $idbuku->save();
    
        return redirect()->back();
    }

    //method untuk hapus data buku -destroy
    public function bukuhapus($idbuku)
    {
        $databuku=BukuModel::find($idbuku);
        $databuku->delete();

        return redirect()->back();
    }
}
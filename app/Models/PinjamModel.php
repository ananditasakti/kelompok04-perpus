<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamModel extends Model
{
    use HasFactory;
    protected $table        = "tbl_peminjaman";
    protected $primaryKey   = "idpinjam";
    protected $fillable     = ['idpinjam','idpetugas','idmahasiswa','idbuku'];

    //relasi ke petugas
    public function petugas()
    {
        return $this->belongsTo('App\Models\PetugasModel', 'idpetugas');
    }

    //relasi ke mahasiswa
    public function mahasiswa()
    {
        return $this->belongsTo('App\Models\MahasiswaModel', 'idmahasiswa');
    }

    //relasi ke buku
    public function buku()
    {
        return $this->belongsTo('App\Models\BukuModel', 'idbuku');
    }
}

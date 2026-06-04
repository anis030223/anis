<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriPengaduan extends Model
{
    use HasFactory;
    protected $fillable =[
        'namakategori','deskripsi'
    ];
    protected $table = 'kategoripengaduan';
    //Relasi ke tabel pengaduan
    public function pengaduan()
    {
        return $this->HasMany('pengaduan','kategori_id','id');
    }
}

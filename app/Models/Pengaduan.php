<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $fillable = ['masyarakat_id','kategori_id','tanggalpengaduan','isipengaduan','foto','status'];
    protected $table = 'pengaduan';

    //Nilai balik relasi ke tabel KategoriPengaduan
    public function KategoriPeengaduan()
    {
        return $this->belongsfor('kategoripengaduan','kategori_id','id');
    }

    //Relasi ke Tanggapan
    public function tanggapan()
    {
        return $this->HasMany('tanggapan','pengaduan_id','id');
    }

    //Nilai balik relasi ke tabel user
    public function user()
    {
        return $this->belongsTo('users','masyarakat_id','id');
    }

}

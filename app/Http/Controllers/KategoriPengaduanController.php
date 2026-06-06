<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriPengaduanController extends Controller
{
    public function index()
    {
        // Mengambil data asli dari database
        $kategori = DB::table('kategoripengaduan')->get();

        return view('pages.admin.kategori.index',[
            'title' => 'APM | Kategori',
            'header' => 'Kategori',
            'breadcrumb1' => 'Kategori',
            'breadcrumb2' => 'Index',
            'kategori' => $kategori
        ]);
    }

    public function create()
    {
        return view('pages.admin.kategori.create',[
            'title' => 'APM | Kategori',
            'header' => 'Kategori',
            'breadcrumb1' => 'Kategori',
            'breadcrumb2' => 'Create'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'textNamaKategori' => 'required',
            'textDeskripsi' => 'required',
        ]);

        // Beneran menyimpan data inputan kamu ke database
        DB::table('kategoripengaduan')->insert([
            'nama_kategori' => $request->textNamaKategori,
            'deskripsi' => $request->textDeskripsi,
        ]);

        return redirect('/kategori')->with('success', 'Data kategori pengaduan berhasil disimpan');
    }

    public function show($id)
    {
        $kategori = DB::table('kategoripengaduan')->where('id', $id)->first();

        return view('pages.admin.kategori.detail',[
            'title' => 'APM | Detail Kategori',
            'header' => 'Detail Kategori',
            'breadcrumb1' => 'Kategori',
            'breadcrumb2' => 'Detail',
            'kategori' => $kategori
        ]);
    }

    public function edit($id)
    {
        $kategori = DB::table('kategoripengaduan')->where('id', $id)->first();

        return view('pages.admin.kategori.edit',[
            'title' => 'APM | Kategori',
            'header' => 'Kategori',
            'breadcrumb1' => 'Kategori',
            'breadcrumb2' => 'Edit',
            'kategori' => $kategori
        ]);
    }

    public function update(Request $request, string $id)
    {
        // Tetap memunculkan notif gagal diubah sesuai request kamu
        return redirect('/kategori')->with('error', 'Maaf data tidak dapat diubah');
    }

    public function destroy(string $id)
    {
        //
    }
}
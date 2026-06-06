<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = DB::table('pegawai')->get();

        return view('pages.admin.pegawai.index',[
            'title' => 'APM | Pegawai',
            'header' => 'Pegawai',
            'breadcrumb1' => 'Pegawai',
            'breadcrumb2' => 'Edit',
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.pegawai.create',[
            'title' => 'APM | Pegawai',
            'header' => 'Pegawai',
            'breadcrumb1' => 'Pegawai',
            'breadcrumb2' => 'Create'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi inputan dari form
        $request->validate([
            'textNik' => 'required',
            'textNama' => 'required',
            'selectJabatan' => 'required',
        ]);

        // Proses insert data ke database yang benar
        DB::table('pegawai')->insert([
            'nik'           => $request->textNik,
            'nama'          => $request->textNama,
            'jenis_kelamin' => $request->selectJenisKelamin,
            'no_telepon'    => $request->textNoTelepon,
            'alamat'        => $request->textAlamat,
            'email'         => $request->textEmail,
            'password'      => $request->textPassword ? bcrypt($request->textPassword) : null,
            'jabatan'       => $request->selectJabatan,
        ]);

        // Berhasil, balik ke halaman utama pegawai
        return redirect('/pegawai');
    }

    /**
     * Display the specified resource.
     */
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        
        $pegawai = DB::table('pegawai')->where('id', $id)->first();
        
        return view('pages.admin.pegawai.detail', [
            'title' => 'APM | Detail Pegawai',
            'header' => 'Detail Pegawai',
            'breadcrumb1' => 'Pegawai',
            'breadcrumb2' => 'Detail',
            'pegawai' => $pegawai
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = DB::table('pegawai')->where('id', $id)->first();

        return view('pages.admin.pegawai.edit',[
            'title' => 'APM | Pegawai',
            'header' => 'Pegawai',
            'breadcrumb1' => 'Pegawai',
            'breadcrumb2' => 'Edit',
            'pegawai' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return redirect('/kategori')->with('error', 'Maaf data tidak dapat diubah');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
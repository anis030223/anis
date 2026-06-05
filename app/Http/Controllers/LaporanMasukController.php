<?php

namespace App\Http\Controllers;

class LaporanMasukController extends Controller
{
    public function index()
    {
        return view('pages.admin.laporanmasuk.index',[
            'title' => 'APM |  Laporan Masuk',
            'header' => 'Laporan Masuk',
            'breadcrumb1' => 'Laporan Masuk',
            'breadcrumb2' => 'Index'
        ]);
    }

    // Detail Laporan
    public function detail()
    {
        return view('pages.admin.laporanmasuk.detail',[
            'title' => 'APM | Laporan Masuk',
            'header' => 'Laporan Masuk',
            'breadcrumb1' => 'Laporan Masuk',
            'breadcrumb2' => 'Detail'
        ]);
    } 
    public function getDataLaporan(Request $request)
    {
        $orderBy ='pengaduan.id';
    switch ($request->input('order.0.column')){
        case 0:
            $orderBy = 'pengaduan.tanggalpengaduan';
            break;
        case'1':
            $orderBy = 'pengaduan.judul';
        case'2':
            $orderBy = 'users.name';
            break;
        case'4':
            $orderBy = 'pengaduan.status';
            break;
    }
    // Get Data Nya
    $data = DB::table('pengaduan')
    ->leftJoin('users','pengaduan.masyarakat_id','=','user.id')
    ->leftJoin('kategoripengaduan','pengaduan.kategori_id','=','kategori.id')
    ->select('pengaduan.*','users.name','kategori.pengaduan.namakategori');
    // Function filter dari inputan search
    if($request->input('search.value')!= null){
        $data = $data->where(function($q)use($request){
            $q->whereRaw('LOWER(pengaduan.judul) like ?',['%'. $request->input('search.value').'%'])
            ->orWhereRaw('LOWER(users.name)like ?',['%'. $request->input('search.value').'%']);
            ->orWhereRaw('LOWER(kategoripengaduan.namakategori)like ?',['%'. $request->input('search.value').'%']);
        });
    }

    $recordsFiltered = $data->get()->count(); // menampilkan jumlah isi record yang terfilter
    if($request->input('length') != -1) $data = $data->skip($request->input('start'))->take($request->input('length'));
    $data = $data->orderBy($orderBy,$request->input('order.0.dir'))->get();
    $recordsTotal = $data->count(); // menampilkan jumlah seluruh data
    return response()->json([
       'draw' => $request->input('draw'),
       'recordsTotal' => $recordsTotal,
       'recordsFiltered' => $recordsFiltered,
       'data' => $data
    ]);
    
    }
}

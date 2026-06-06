@extends('layouts.layoutadmin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="card card-outline card-info">
                <div class="card-header">
                    <h3 class="card-title"><i class="fas fa-file-alt"></i> Detail Kategori Pengaduan</h3>
                    <a href="/kategori" class="btn float-right btn-warning btn-md">
                        <li class="fa fa-undo"></li> Kembali
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th style="width: 30%">Nama Kategori</th>
                            <td>{{ $kategori->nama_kategori ?? '-' }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>{{ $kategori->deskripsi ?? '-' }}</td>
                        </tr>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
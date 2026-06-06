@extends('layouts.layoutadmin')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">

            @if(session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="icon fas fa-ban"></i> {{ session('error') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Kategori</h3>
                    <a href="/kategori/create" class="btn float-right btn-outline-secondary btn-md">
                        <li class="fa fa-plus"></li> Add Data Kategori
                    </a>
                </div>
                <div class="card-body">

                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width: 5%">#</th>
                                <th>Nama Kategori</th>
                                <th>Deskripsi</th>
                                <th style="width: 15%; text-align: center;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($kategori as $no => $item)
                            <tr>
                                <td>{{ $no + 1 }}</td>
                                <td>{{ $item->nama_kategori }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td style="text-align: center;">
                                    {{-- ICON DETAIL BIRU (BARU) --}}
                                    <a href="/kategori/{{ $item->id }}" class="btn btn-info btn-xs" title="Detail Kategori">
                                        <li class="fa fa-eye"></li>
                                    </a>
                                    {{-- ICON EDIT KUNING --}}
                                    <a href="/kategori/{{ $item->id }}/edit" class="btn btn-warning btn-xs" title="Edit Kategori">
                                        <li class="fa fa-edit"></li>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </section>
@endsection
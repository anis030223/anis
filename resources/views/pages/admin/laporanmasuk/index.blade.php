@extends('layouts.layoutadmin')
@section('content')
<section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Laporan Masuk</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3 float-right">
                                        <label for="selectFilter">Filter Berdasarkan status</label>
                                        <select name="selectFilter" id="select Filter" class="form form-control">
                                            <option value="">-- Filter Status --</option>
                                            <option value="">New</option>
                                            <option value="">Process</option>
                                            <option value="">Selesai</option>
                                        </select>
                                    </div>
                                    <div class="col-md-3 float-right">
                                        <label for="selectFilter">Filter Berdasarkan Kategori</label>
                                        <select name="selectFilter" id="select Filter" class="form form-control">
                                            <option value="">-- Filter Kategori --</option>
                                            <option value="">Pencemaran</option>
                                            <option value="">Kekerasan</option>
                                        </select>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Tanggal Pengaduan</th>
                                                    <th>Judul Pengaduan</th>
                                                    <th>Nama Pengadu</th>
                                                    <th>Kategori</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </section>
@endsection
@section('js')
<script type="text/javascript">
const table = $('#idDataTable').DataTable({
    "pageLength"    : 10,
    "lengthMenu"    : [
        [10, 25, 50, 100], 
        [10, 25, 50, 100]
    ],
    "bLengthChange" : true,
    "bFilter"       : true,
    "bInfo"         : true,
    "processing"    : true,
    "bServerSide"   : true,
    ajax:{
        url:"{{ 'url'('') }}",
        type: "POST",
    },
    columnDefs:[{
        targets: "_all",
        visible: true
    },
    {
        "targets": 0, // Untuk urutan data di dalam kolom
        "class": "text-nowrap",
        "render": function(data, type, row, meta){
            return row.tanggalpengaduan 
        }
    },
    {
        "targets": 1, // Untuk urutan data di dalam kolom
        "class": "text-nowrap",
        "render": function(data, type, row, meta){
            return row.juduln 
        }
    },
    {
        "targets": 3, // Untuk urutan data di dalam kolom
        "class": "text-nowrap",
        "render": function(data, type, row, meta){
            return row.name
        }
    },
    {
        "targets": 4, // Untuk urutan data di dalam kolom
        "class": "text-nowrap",
        "render": function(data, type, row, meta){
            return row.namakategori 
        }
    },
    {
        "targets": 5, // Untuk urutan data di dalam kolom
        "class": "text-nowrap",
        "render": function(data, type, row, meta){
            return row.status 
        }
    },
    {
        "targets": 6, // Untuk urutan data di dalam kolom
        "class": "text-nowrap",
        "render": function(data, type, row, meta){
            return <a href="laporanmasuk/detail/$(row.id)" class="btn btn-primary btn-xs"><li class="fa fa-list"></li></a>
        }
    },
]
})
</script>
@endsection
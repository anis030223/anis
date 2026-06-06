@extends('layouts.layoutadmin')
@section('content')
           <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Data Pegawai</h3>
                                <a href="/pegawai/create" class="btn float-right btn-outline-secondary btn-md">
                                    <li class="fa fa-plus"></li> Add Data Pegawai
                                </a>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                           @if(session('error'))
                           <div class="alert alert-danger alert-dismissible fade show" role="alert">
                           <i class="icon fas fa-ban"></i> {{ session('error') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                             </button>
                             </div>
                               @endif

                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                     @foreach ($pegawai as $pegawai)
                                    <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pegawai->nik }}</td>
                                    <td>{{ $pegawai->nama }}</td>
                                    <td>{{ $pegawai->jabatan }}</td>
                                    <td>
                                        <a href="/pegawai/{{ $pegawai->id }}/edit" class="btn btn-warning btn-xs" title="Edit Pegawai">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        
                                        <a href="/pegawai/{{ $pegawai->id }}" class="btn btn-primary btn-xs" title="Detail Pegawai">
                                            <i class="fa fa-list"></i>
                                        </a>
                                        </td>
                                       </tr>
                                    @endforeach
                                    </tbody>
                                </table>
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
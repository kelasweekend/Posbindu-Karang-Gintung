@extends('layouts.admin.master')

@section('title')
    Rekap Data Pasien {{ $data->nama_lengkap }}
@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>@yield('title')</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ url('kader') }}">Kader</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Pasien a.n {{ $data->nama_lengkap }}</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td>{{ $data->nama_lengkap }}</td>
                                    <td>Nama Panggilan</td>
                                    <td>:</td>
                                    <td>{{ $data->nama_panggilan }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor KTP</td>
                                    <td>:</td>
                                    <td>{{ $data->ktp }}</td>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>{{ $data->tanggal_lahir }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{ $data->jk }}</td>
                                    <td>Golongan Darah</td>
                                    <td>:</td>
                                    <td>{{ $data->goldar }}</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td>{{ $data->agama }}</td>
                                    <td>Pekerjaan</td>
                                    <td>:</td>
                                    <td>{{ $data->pekerjaan }}</td>
                                </tr>
                                <tr>
                                    <td>Nomor HP</td>
                                    <td>:</td>
                                    <td>{{ $data->no_hp }}</td>
                                    <td>Pendidikan Terakhir</td>
                                    <td>:</td>
                                    <td>{{ $data->pendidikan }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $data->email }}</td>
                                    <td>Status</td>
                                    <td>:</td>
                                    <td>{{ $data->pernikahan }}</td>
                                </tr>
                                <tr>
                                    <td colspan="1">Alamat Lengkap</td>
                                    <td>:</td>
                                    <td colspan="4">{{ $data->alamat }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card card-success">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <h3 class="card-title">Rekap Pemeriksaan</h3>
                            <button class="btn btn-light btn-sm">Cetak PDF</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td>@mdo</td>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td>@mdo</td>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td>@mdo</td>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td>@fat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
@endsection

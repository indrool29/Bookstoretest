@extends('admin.admin')

@section('judul','Managemen Buku')

@section('isi')

<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Managemen Buku</h3>
            <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="/admin/">Dashboard</a></li>
                <li>Master Data</li>
                <li>Managemen Buku</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Daftar Buku
                </header>
                <a class="btn btn-primary btn-sm=" href="/admin/managemenbuku/tambah" title="boostrap 3 theme generator">Tambah Data</a>
                <table class="table table-striped table-advance table-hover">
                    <tbody>
                        <tr>
                            <th> ID Buku</th>
                            <th> Judul Buku</th>
                            <th> Nama Penulis</th>
                            <th> Tanggal Terbit</th>
                            <th> Aksi</th>
                        </tr>
                        @foreach($data_buku as $db)
                        <tr>
                            <td>{{ $db->no_buku}}</td>
                            <td>{{ $db->judul_buku}}</td>
                            <td>{{ $db->nama_penulis}}</td>
                            <td>{{ $db->tgl_terbit}}</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="/admin/managemenbuku/edit/{{ $db->no_buku }}">edit</a>
                                    <a class="btn btn-danger" href="/admin/managemenbuku/hapus/{{ $db->no_buku}}">delete</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>

    <!-- page start-->
    Managemen Buku
    <!-- page end-->
</section>

@endsection
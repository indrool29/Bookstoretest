@extends('admin.admin')

@section('judul','Tambah data buku')

@section('isi')
<section class="wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa fa-bars"></i> Tambah Data</h3>
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
                    Edit Data
                </header>
                <div class="panel-body">
                    @foreach($data_buku as $db)
                    <form class="form-horizontal " method="post" action="/admin/managemenbuku/update">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label class="col-sm-2 control-label">No Buku</label>
                            <div class="col-sm-10">
                                <input type="text" readonly name="nomor" value="{{ $db->no_buku }}" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Judul Buku</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul" value="{{ $db->judul_buku }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nama Penulis</label>
                            <div class="col-sm-10">
                                <input type="text" name="penulis" value="{{ $db->nama_penulis }}" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-2">Tanggal Terbit</label>
                            <div class="col-sm-10">
                                <input id="dp1" type="date" name="tanggal" value="{{ $db->tgl_terbit }}" size="16" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label"></label>
                            <div class="cool-sm-10">
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>
                        </div>
                    </form>
                    @endforeach
                </div>
            </section>
        </div>
    </div>

    <!-- page start-->

    <!-- page end-->
</section>

@endsection
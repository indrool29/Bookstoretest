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
                <table class="table table-striped table-advance table-hover">
                    <tbody>
                        <tr>
                            <th><i class="icon_profile"></i> ID Buku</th>
                            <th><i class="icon_calendar"></i> Judul Buku</th>
                            <th><i class="icon_mail_alt"></i> Nama Penulis</th>
                            <th><i class="icon_pin_alt"></i> Tanggal Terbit</th>
                        </tr>
                        <tr>
                            <td>001</td>
                            <td>Belajar Bahasa PHP</td>
                            <td>Amarillo</td>
                            <td>945-547-5302</td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                    <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </div>

    <!-- page start-->
    Data User
    <!-- page end-->
</section>

@endsection
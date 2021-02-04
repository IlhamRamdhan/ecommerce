@extends('admin.layouts.master')

@section('title')
    Admin | Detail Pesanan
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <h1 class="m-0 text-dark"><i class="far fa-life-ring"></i> Detail Pesanan </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-user"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
 <!-- Content Wrapper. Contains page content -->

 <div class="container">
            <div class="card card-custom gutter-b">
                <div class="card-header flex-wrap py-3">
                    <div class="card-title">
                        <h3 class="card-label">Tabel Detail Pesanan
                        <span class="d-block text-muted pt-2 font-size-sm">View Database</span></h3>
</div>
</div>
<div class="card-body">
                    <!--begin: Datatable-->
              <table class="table table-bordered" id="data-pricing">
                <thead>
                  <tr>
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Barang</th>
                    <th>Total Pembayaran</th>
                    <th>Tanggal Pembelian</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                $no=1;
                ?>
                @foreach($detail as $d)
                <tr>
                  <td>{{$d->pesanan->id}}</td>
                  <td>{{$d->barang->nama_barang}}</td>
                  <td>{{$d->jumlah}} Pasang</td>
                  <td>Rp. {{ number_format($d->jumlah_harga)}}</td>
                  <td>Rp. {{ number_format($d->jumlah_harga+$d->pesanan->kode)}}</td>
                  <td>{{$d->pesanan->tanggal}}</td>
                </tr>
                @endforeach
                </tbody>
              </table>
                    <!--end: Datatable-->
                </div>
            </div>
        </div>
       
<div class="footer py-2 py-lg-0 my-5 d-flex flex-lg-column" id="kt_footer">
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2021©</span>
                        <a href="https://www.instagram.com/haaam_93/" target="_blank" class="text-dark-75 text-hover-primary">IR Surfers Technology</a>
                    </div>
                </div>
            </div>
        <!--end::Container-->
    </div>
   
    <!--end::Entry-->
</div>
@endsection

@section('scripts')
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
 <script>
  $(function () {
    $("#data-pricing").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
  });
  </script>
@endsection
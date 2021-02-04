@extends('admin.layouts.master')

@section('title')
    Admin | Tambah Produk
@endsection

@section('css')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.4/css/fileinput.min.css" media="all" type="text/css" />

<style>
    .file-input{
        width : 100%;
    }
</style>
@endsection

@section('content')
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
<!--begin::Entry-->
 <!-- Content Header (Page header) -->
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fa fa-folder-open"></i> Daftar Produk </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('produk')}}">Daftar Produk</a></li>
              <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <div class="d-flex flex-column-fluid">
  <!--begin::Container-->
  <div class="container">
  <div class="flex-row-fluid ml-lg-6">
  <form action="/admin/daftar_produk/store" method="POST">
  {{ csrf_field() }}
  <div class="card card-custom card-stretch">
  <!--begin::Header-->
  <div class="card-header py-3">
  <div class="card-title align-items-start flex-column">
  <h3 class="card-label font-weight-bolder text-dark">Tambah Produk Fitur</h3>
  <span class="text-muted font-weight-bold font-size-sm mt-1">Update your Fitur</span>
  </div>
  </div>
  <input type="hidden" name="id">

  <div class="card-body">
    <div class="form-group row">
    <label class="col-xl-2 col-lg-3 col-form-label"><i class="fas fa-pencil-alt"></i> Nama Produk</label>
    <div class="col-lg-10 col-xl-6">
        <input type="text" name="nama_barang" class="form-control form-control-lg form-control-solid" placeholder="Nama Produk">
        @if($errors->has('nama'))
          <div class="text-danger">
           {{ $errors->first('nama_barang')}}
          </div>
        @endif
    </div>
    </div>

    <div class="form-group row">
    <label class="col-xl-2 col-lg-3 col-form-label"><i class="fas fa-comment-dots"></i> Deskripsi</label>
    <div class="col-lg-10 col-xl-6">
    <textarea type="text" cols="30" rows="10" name="keterangan" class="form-control form-control-lg form-control-solid" placeholder="Deskripsi Produk"></textarea>
    @if($errors->has('keterangan'))
      <div class="text-danger">
        {{ $errors->first('keterangan')}}
      </div>
    @endif
    </div>
    </div>

    <div class="form-group row">
    <label class="col-xl-2 col-lg-3 col-form-label"><i class="fas fa-dollar-sign"></i> Harga</label>
    <div class="col-lg-10 col-xl-6">
    <input type="text" name="harga" class="form-control form-control-lg form-control-solid" placeholder="Harga Produk">
    @if($errors->has('harga'))
      <div class="text-danger">
        {{ $errors->first('harga')}}
      </div>
    @endif   
    </div>
    </div>

    <div class="form-group row">
    <label class="col-xl-2 col-lg-3 col-form-label"><i class="fas fa-layer-group"></i> Stok</label>
    <div class="col-lg-10 col-xl-6">
    <input type="text" name="stok" class="form-control form-control-lg form-control-solid" placeholder="Jumlah Stok Produk">
    @if($errors->has('stok'))
      <div class="text-danger">
        {{ $errors->first('stok')}}
      </div>
    @endif
    </div>
    </div>

    <div class="form-group row">
    <label class="col-xl-2 col-lg-3 col-form-label"><i class="far fa-images"></i> Gambar</label>
    <div class="col-lg-10 col-xl-6">
        <input id="input-fa" type="file" class="form-control file form-control-lg form-control-solid" name="gambar" data-browse-on-zone-click="true" >
    </div>
    </div>
    <div class="input-group">
      <button type="submit" class="btn btn-success mr-2 btn-text-sm btn-loading button-submit align-right"><i class="fas fa-paper-plane"></i> Save Changes</button>
    </div>
    </div>
</form>
<div>
  </div>
  <!--end::Container-->
  </div>
          
<div class="footer py-2 py-lg-0 my-5 d-flex flex-lg-column" id="kt_footer">
                <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                    <div class="text-dark order-2 order-md-1">
                        <span class="text-muted font-weight-bold mr-2">2021©</span>
                        <a href="https://www.instagram.com/haaam_93/" target="_blank" class="text-dark-75 text-hover-primary">IR Surfers Technology</a>
                    </div>
                </div>
            </div>
  <!--end::Entry-->
  </div>
</div>
@endsection

@section('scripts')
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.4/js/fileinput.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/5.1.4/themes/fa/theme.min.js"></script>
<script src="/path/to/js/fileinput.js"></script>
<script src="/path/to/themes/fa/theme.js"></script>
<script>
    $("#input-fa").fileinput({
        theme: "fa";
        uploadUrl: "/file-upload-batch/2"
    });
</script>
@endsection

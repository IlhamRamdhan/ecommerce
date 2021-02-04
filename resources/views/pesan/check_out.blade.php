@extends('layouts.master')

@section('content')

    <!-- Section Page Title Start -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4><i class="fa fa-shopping-cart"></i>Check Out</h4>
                    <hr class="divider" />
                    
                    <ol class="breadcrumb">
                      <li>You are here:</li>
                      <li><a href="{{url('home')}}">Home</a></li>
                      <li class="active">check out</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Section Page Title End -->
    
<br>
<section class="container">
   <div class="row">
   <div class="col-md-12">
<div class="card">
<div class="card-body">
@if(!empty($pesanans))
<p align="right">Tanggal Pesanan : {{$pesanans->tanggal}}</p>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
    <?php $no = 1;  ?>
    @foreach($pesanan_details as $pesanan_detail)
        <tr>
            <td>{{ $no++ }}</td>
            <td>
            <img src="{{ asset('uploads') }}/{{ $pesanan_detail->barang->gambar }}" width="100" alt="Card image cap">
            </td>
            <td>{{ $pesanan_detail->barang->nama_barang}}</td>
            <td>{{ $pesanan_detail->jumlah}} Pasang</td>
            <td align="right">Rp. {{ number_format($pesanan_detail->barang->harga) }}</td>
            <td align="right">Rp. {{ number_format($pesanan_detail->jumlah_harga) }}</td>
            <td>
                <form action="{{ url('check-out') }}/{{ $pesanan_detail->id }}" method="post">
                @csrf
                {{method_field('delete') }}
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin akan Menghapus Data ?');"><i class="fa fa-trash"></i></button>
                </form>
            </td>
        </tr>
    @endforeach
    <tr>
        <td colspan="5" align="right"><strong> Harga : </strong></td>
        <td align="right"><strong>Rp. {{ number_format($pesanans->jumlah_harga) }}</strong></td>
        <td>
        <a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success" onclick="return confirm('Anda yakin akan Check Out ?');">
        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Check Out </a>
        </td>
    </tr>
    </tbody>
    </table>
    @endif
</div>
</div>
</div>
   </div>
</section>
<br>
@endsection

@extends('layouts.master')

@section('content')

	
    <!-- Section Page Title Start -->
    <section class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h4><i class="fa fa-history"></i> Riwayat Pemesanan</h4>
                    <hr class="divider" />
                    
                    <ol class="breadcrumb">
                      <li>You are here:</li>
                      <li><a href="{{ url('home') }}">Home</a></li>
                      <li class="active">Riwayat Pemesanan</li>
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
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Jumlah Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach($pesanans as $pesanan)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $pesanan->tanggal }}</td>
                                <td>
                                    @if($pesanan->status == 1)
                                    Sudah Pesan & Belum dibayar
                                    @else
                                    Sudah dibayar 
                                    @endif
                                </td>
                                <td>Rp. {{ number_format($pesanan->jumlah_harga+$pesanan->kode) }}</td>
                                <td>
                                    <a href="{{ url('history') }}/{{ $pesanan->id }}" class="btn btn-primary"><i class="fa fa-info"></i> Detail</a>
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
<br>
@endsection
<?php

namespace App\Http\Controllers\Admin;

use App\Pesanan;
use App\Barang;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::all();
        return view ('admin.pesanan.index',compact('pesanan'));
    }
}

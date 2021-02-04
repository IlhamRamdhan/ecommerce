<?php

namespace App\Http\Controllers\Admin;

use App\PesananDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailController extends Controller
{
    public function index()
    {
        $detail = PesananDetail::all();
        return view ('admin.detail_pesanan.index',compact('detail'));
    }
}

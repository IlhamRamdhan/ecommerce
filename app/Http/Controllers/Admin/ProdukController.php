<?php

namespace App\Http\Controllers\Admin;

use App\Barang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index()
    {
        $barangs = Barang::all();
        return view('admin.daftar_produk.index',compact('barangs'));
    }
    public function add()
    {
        return view ('admin.daftar_produk.add');
    }
// method untuk insert data ke table pegawai
    public function store(Request $request)
    { 
        // insert data ke table pegawai
        DB::table('barangs')->insert([
            'nama_barang' => $request->nama_barang,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('admin/daftar_produk');
    }
// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$barangs = DB::table('barangs')->where('id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('admin.daftar_produk.edit',['barangs' => $barangs]);
 
}
// update data pegawai
public function update(Request $request)
{
        // update data pegawai
        DB::table('barangs')->where('id',$request->id)->update([
            'nama_barang' => $request->nama_barang,
            'keterangan' => $request->keterangan,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar
        ]);
        // alihkan halaman ke halaman pegawai
	return redirect('admin/daftar_produk');
}
// method untuk hapus data pegawai
public function hapus($id)
{
	$barangs = Barang::find($id);
    	$barangs->delete();

    	return redirect('admin/daftar_produk');
}
}
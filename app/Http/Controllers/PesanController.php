<?php

namespace App\Http\Controllers;
use Alert;
use App\User;
use App\Pesanan;
use App\Barang;
use Carbon\Carbon;
use App\PesananDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class PesanController extends Controller
{
    public function construct()
    {
        $this->middleware('auth');
    }
    public function index($id)
    {
        $barangs = Barang::where('id',$id)->first();
        return view ('pesan.index', compact('barangs'));
    }
    public function pesan(Request $request, $id)
    {
        $barangs = Barang::where('id',$id)->first();
        $tanggal = Carbon::now();

        if ($request->jumlah_pesan > $barangs->stok)
        {
            return redirect('pesan/'.$id);
        }

        $cek_pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        if (empty( $cek_pesanans ))
        {
            $pesanans = new Pesanan;
            $pesanans ->user_id = Auth::user()->id;

            $pesanans->tanggal = $tanggal;
            $pesanans->status = 0;
            $pesanans->jumlah_harga = 0;
            $pesanans->kode = mt_rand(100, 999);
            $pesanans->save();
        }


        $pesanan_baru = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        $cek_pesanan_details = PesananDetail::where('barang_id', $barangs->id)->where('pesanan_id',  $pesanan_baru->id)->first();
        if (empty( $cek_pesanan_details ))
        {
            $pesanan_details = new PesananDetail;
            $pesanan_details->barang_id = $barangs->id;
            $pesanan_details->pesanan_id = $pesanan_baru->id;
            $pesanan_details->jumlah = $request->jumlah_pesan;
            $pesanan_details->jumlah_harga = $barangs->harga*$request->jumlah_pesan;
            $pesanan_details->save();
        }else
        {
            $pesanan_details = PesananDetail::where('barang_id', $barangs->id)->where('pesanan_id',  $pesanan_baru->id)->first();
            $pesanan_details->jumlah = $request->jumlah_pesan+$request->jumlah_pesan;
            $harga_pesanan_detail_baru = $barangs->harga*$request->jumlah_pesan;
            $pesanan_details->jumlah_harga = $pesanan_details->jumlah_harga+$harga_pesanan_detail_baru;
            $pesanan_details->update();
        }
            $pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
            $pesanans->jumlah_harga = $pesanans->jumlah_harga+$barangs->harga*$request->jumlah_pesan;
            $pesanans->update();

        Alert::success('Pesanan Sukses Masuk Keranjang', 'Success');
        return redirect('check-out');
    }
    public function check_out()
    {
        $pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        if (empty( $pesanan))
        {
            $pesanan_details = PesananDetail::where('pesanan_id', $pesanans->id)->with(['barang'])->get();
        }
        return view('pesan.check_out', compact('pesanans','pesanan_details'));
    }
    public function delete ($id)
    {
        $pesanan_details = PesananDetail::where('id', $id)->first();
        $pesanans = Pesanan::where('id', $pesanan_details->pesanan_id)->first();
        $pesanans->jumlah_harga =  $pesanans->jumlah_harga-$pesanan_details->jumlah_harga;
        $pesanans->update();

        $pesanan_details->delete();
        Alert::error('Pesanan Sukses Dihapus', 'Hapus');
        return redirect('check-out');
    }
    public function konfirmasi()
    {
        $user = User::where('id', Auth::user()->id)->first();

        if(empty($user->alamat))
        {
            Alert::error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        }

        if(empty($user->nohp))
        {
            Alert::error('Identitasi Harap dilengkapi', 'Error');
            return redirect('profile');
        }

        $pesanans = Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pesanan_id = $pesanans->id;
        $pesanans->status = 1;
        $pesanans->update();
        $pesanan_details = PesananDetail::where('pesanan_id', $pesanan_id)->get();
        foreach ($pesanan_details as $pesanan_detail)
        {
            $barangs = Barang::where('id', $pesanan_detail->barang_id)->first();
            $barangs->stok = $barangs->stok-$pesanan_detail->jumlah;
            $barangs->update();
        }

        Alert::success('Pesanan Sukses Check Out Silahkan Lanjutkan Proses Pembayaran', 'Success');
        return redirect('history/'.$pesanan_id);
    }
}

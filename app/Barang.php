<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = "barangs";
    
    public function pesanan_detail()
    {
        return $this->hasMany('App\PesananDetal','barang_id','id');
    }
}

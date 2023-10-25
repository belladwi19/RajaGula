<?php

namespace App\Models;
use App\Models\Produk; 
use App\Models\User; 
use App\Models\order; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksis';
    protected $primaryKey = "id";

    public function produk()
    {
        return $this->belongsTo('App\Models\Produk', 'id_produk');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
    
    public function order()
    {
        return $this->belongsTo('App\Models\order', 'no_order');
    }
}

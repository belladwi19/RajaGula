<?php

namespace App\Models;

use App\Models\Produk; 
use App\Models\User; 

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    protected $table = 'reviews';
    protected $primaryKey = "id";

    public function produk()
    {
        return $this->belongsTo('App\Models\Produk', 'id_produk');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }

}

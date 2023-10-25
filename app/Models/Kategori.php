<?php

namespace App\Models;

use App\Models\produk;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
    protected $primaryKey = "id";

    protected $fillable = [
    	'id',
    	'kategori',
    	'created_at',
    	'updated_at'
    ];

    public function produk()
    {
        return $this->hasMany('App\Models\Produk', 'id');
    }
}

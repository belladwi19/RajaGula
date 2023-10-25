<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = "id";

    protected $fillable = [
    	'id',
    	'no_order',
    	'created_at',
    	'updated_at'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}

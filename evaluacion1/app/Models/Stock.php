<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'stocks';

    public function categoria(){
        return $this->belongsTo(Sucursale::class, 'sucursale_id');
    }

    public function producto(){
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}
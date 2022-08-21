<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'productos';

    public function categoria(){
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

    public function stocks(){
        return $this->hasMany(Stock::class);
    }

}

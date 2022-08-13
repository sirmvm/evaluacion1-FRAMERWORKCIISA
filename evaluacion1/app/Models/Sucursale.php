<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursale extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'sucursales';

    public function stocks(){
        return $this->hasMany(Stock::class);
    }
}

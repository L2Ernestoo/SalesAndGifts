<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleVentas extends Model
{
    use HasFactory;
    protected $table = 'detalle_ventas';

    public function producto(){
        return $this->hasOne(Productos::class, 'id', 'productos_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    protected $table = 'ventas';

    public function cajero(){

        return $this->hasOne(User::class,'id','users_id');
    }

    public function cliente(){

        return $this->hasOne(Clientes::class,'id','clientes_id');
    }
}

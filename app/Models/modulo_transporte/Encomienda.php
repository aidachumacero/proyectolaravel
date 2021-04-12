<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modulo_administrativo\Usuario;
use App\Models\modulo_transporte\Lugar;

class Encomienda extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    public function usuario() {
    	return $this->belongsTo('App\Models\modulo_administrativo\Usuario');
    }

    public function lugares() {
    	return $this->hasMany('App\Models\modulo_transporte\Usuario');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modulo_venta\Reserva;
use App\Models\modulo_transporte\Viaje;
use App\Models\modulo_transporte\Encomienda;
use App\Models\modulo_transporte\Informacion;

class Usuario extends Model
{
    use HasFactory;
    
    protected $table = 'usuarios'; 

    public function viaje() {
    	return $this->hasOne('App\Models\Viaje');
    }
    public function reservas() {
            return $this->hasMany('App\Models\modulo_venta\Reserva');
        }
    public function encomiendas() {
    	return $this->hasMany('App\Models\modulo_transporte\Encomienda');
    }

    public function informacion() {
        return $this->hasOne('App\Models\modulo_transporte\Informacion');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modulo_transporte\Lugar;
use App\Models\modulo_venta\Asiento;
use App\Models\modulo_transporte\Viaje;

class Bus extends Model
{
    use HasFactory;
    protected $table = 'buses';

    public function viaje() {
    	return $this->hasOne('App\Models\Viaje');
    }
   /* protected $table = 'lugars';

    public function lugares() {
    	return $this->hasMany('App\Models\modulo_transporte\Lugar');
    }

    public function asientos() {
    	return $this->hasMany('App\Models\modulo_venta\Asiento');
    }

     */
}

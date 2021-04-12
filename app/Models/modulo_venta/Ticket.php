<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modulo_venta\Asiento;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'asientos';

    public function asiento() {
    	return $this->hasOne('App\Models\modulo_venta\Asiento');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modulo_administrativo\Bus;
use App\Models\modulo_venta\Ticket;
class Asiento extends Model
{
    use HasFactory;
    protected $table = 'buses';

    public function bus() {
    	return $this->belongsTo('App\Models\modulo_administrativo\Bus');
    }

    public function ticket() {
    	return $this->hasOne('App\Models\modulo_venta\Ticket');
    }
    


}

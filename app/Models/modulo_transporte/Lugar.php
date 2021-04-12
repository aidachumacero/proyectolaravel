<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modulo_transporte\Encomenda;

class Lugar extends Model
{
    use HasFactory;
    protected $table = 'encomiendas';

    public function encomienda() {
    	return $this->belongsTo('App\Models\modulo_transporte\Encomienda');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modulo_administrativo\Usuario;
class Informacion extends Model
{
    use HasFactory;

    protected $table = 'usuarios';
    
    public function usuario() {
    	return $this->belongsTo('App\Models\modulo_administrativo\Usuario');
    }
}

<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//namespace App\Models\Model;

class Viaje extends Model
{
    use HasFactory;
   protected $table = 'viajes';
    protected $fillable = [
        'origen', 'destino', 'fecha', 'hora'
    ];
    protected $casts = [
        'fecha' => 'datetime'  
    ];
  
    public function usuarios() {
    	return $this->belongsToMany('App\Models\Usuario');
    }
    public function bus() {
    	return $this->belongsTo('App\Models\Bus');
    }

}

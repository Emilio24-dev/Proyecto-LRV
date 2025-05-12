<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class _camisetas extends Model
{
    
        protected $table = '_camisetas';
    
        protected $fillabe = [
            'Equipo_cami',
            'Marca_cami',
            'Talla_cami',
            'Tipo_cami',
            'Precio_cami'
        ];
    
        public function venta_camisa(){
            return $this->hasMany(Modelventa_camisa::class);
        }
    
}

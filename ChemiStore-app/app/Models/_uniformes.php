<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class _uniformes extends Model
{
    
        protected $table = '_camisetas';
    
        protected $fillabe = [
            'Equipo_uni',
            'Marca_uni',
            'Talla_uni',
            'Tipo_uni',
            'Precio_uni'
        ];
    
        public function venta_camisa(){
            return $this->hasMany(Modelventa_uniforme::class);
        }
    
}

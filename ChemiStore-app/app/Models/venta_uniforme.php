<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class venta_uniforme extends Model
{
    
        protected $table = 'venta_uniforme';
    
        protected $fillabe = [
            'Cantidad_uni'
        ];
    
        public function uniformes(){
            return $this->hasMany(Model_uniformes::class);
        }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class venta_camisa extends Model
{
    
        protected $table = 'venta_camisa';
    
        protected $fillabe = [
            'Cantidad_cami'
        ];
    
        public function camisetas(){
            return $this->hasMany(Model_camisetas::class);
        }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class venta_balon extends Model
{
    
        protected $table = 'venta_balon';
    
        protected $fillabe = [
            'Cantidad_bal'
        ];
    
        public function balones(){
            return $this->hasMany(Model_balones::class);
        }
    
}

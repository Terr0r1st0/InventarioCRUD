<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany ;
class proveedor extends Model


{        

    protected $table = 'proveedores';
    use HasFactory;
    public function compras():HasMany
    {
        return $this->hasMany(Compra::class);
    }
}

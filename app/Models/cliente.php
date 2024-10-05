<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany ;
class cliente extends Model
{
    protected $table = 'clientes';
    use HasFactory;

        
    public function ventas(): HasMany
    {
        return $this->hasMany(Venta::class);
    }


}

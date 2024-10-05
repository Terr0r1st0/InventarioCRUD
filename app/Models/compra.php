<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo ;
class compra extends Model
{
    use HasFactory;



    public function proveedor():BelongsTo
    {
        return $this->belongsTo(Proveedor::class);
    }

    public function producto():BelongsTo
    {
        return $this->belongsTo(Producto::class);
    }
}

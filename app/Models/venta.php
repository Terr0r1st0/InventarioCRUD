<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;


class venta extends Model
{
    protected $table = 'ventas';
    use HasFactory;
    protected $fillable = ['cliente_id', 'producto_id', 'cantidad', 'precio_venta'];
    public function cliente():BelongsTo
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function producto():BelongsTo
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}

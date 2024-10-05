<?php

namespace App\Filament\Widgets;

use App\Models\compra;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Support\Facades\DB;

class InformeCompras extends BaseWidget
{

    protected static string $view = 'filament.widgets.informe-compras'; // Asegúrate de tener la vista correspondiente
    public function table(Table $table): Table
    {
        return $table
            ->query(compra::query())
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID'),
                Tables\Columns\TextColumn::make('proveedor.nombre')->label('Proveedor'),
                Tables\Columns\TextColumn::make('producto.nombre')->label('Producto'),
                Tables\Columns\TextColumn::make('cantidad')->label('Cantidad'),
                Tables\Columns\TextColumn::make('precio_compra')->label('Precio de Compra'),
                
            ]);
    }

    public function getTotalCompras(): float
    {
        return Compra::sum(DB::raw('cantidad * precio_compra')); // Suma el total de compras
    }

}

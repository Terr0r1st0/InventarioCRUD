<?php

namespace App\Filament\Widgets;

use App\Models\Venta; // Asegúrate de importar tu modelo Venta
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Support\Facades\DB;

class InformeVentas extends BaseWidget
{
    protected static string $view = 'filament.widgets.informe-ventas'; // Asegúrate de tener la vista correspondiente

    public function table(Table $table): Table
    {
        return $table
            ->query(Venta::query()) // Obtener todas las ventas
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label('ID')
                    ->sortable()
                    ->color('red'),
                Tables\Columns\TextColumn::make('cliente.name')
                    ->label('Cliente')
                    ->sortable(),
                Tables\Columns\TextColumn::make('producto.nombre')
                    ->label('Producto')
                    ->sortable(),
                Tables\Columns\TextColumn::make('cantidad')
                    ->label('Cantidad')
                    ->sortable(),
                Tables\Columns\TextColumn::make('precio_venta')
                    ->label('Precio de Venta')
                    ->sortable()
                    ->money('USD'), // Cambia a la moneda que estés usando
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Fecha')
                    ->sortable()
                    ->dateTime(),
            ])
            ->filters([
                // Aquí puedes agregar filtros si lo deseas
            ])
            ->actions([
                // Puedes definir acciones aquí si es necesario
            ])
            ->bulkActions([
                // Puedes definir acciones en bloque aquí si es necesario
            ]);
    }



    public function getTotalVentas(): float
    {
        return Venta::sum(DB::raw('cantidad * precio_venta'));
    }
    





}


<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VentasResource\Pages;
use App\Filament\Resources\VentasResource\RelationManagers;
use App\Models\Venta;
use App\Models\cliente;
use App\Models\producto;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VentasResource extends Resource
{
    protected static ?string $model = Venta::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('cliente_id')
                ->relationship('cliente','name')
                ->searchable()
                ->preload()
                ->required(),
                Select::make('producto_id')
                ->relationship('producto','nombre')
                ->searchable()
                ->preload()
                ->required(),
                
                TextInput::make('cantidad'),
                TextInput::make('precio_venta'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('cliente_id'),
                TextColumn::make('producto_id'),
                TextColumn::make('cantidad'),
                TextColumn::make('precio_venta'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVentas::route('/'),
            'create' => Pages\CreateVentas::route('/create'),
            'edit' => Pages\EditVentas::route('/{record}/edit'),
        ];
    }
}

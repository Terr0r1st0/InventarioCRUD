<?php

namespace App\Filament\Resources\ComprasResource\Pages;

use App\Filament\Resources\ComprasResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCompras extends CreateRecord
{
    protected static string $resource = ComprasResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

}

<?php

namespace App\Filament\Resources\MenuPeriodeResource\Pages;

use App\Filament\Resources\MenuPeriodeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenuPeriodes extends ListRecords
{
    protected static string $resource = MenuPeriodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

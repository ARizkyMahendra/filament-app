<?php

namespace App\Filament\Resources\MenuPeriodeResource\Pages;

use App\Filament\Resources\MenuPeriodeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMenuPeriode extends EditRecord
{
    protected static string $resource = MenuPeriodeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

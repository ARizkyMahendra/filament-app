<?php

namespace App\Filament\Resources\MenuGalleryResource\Pages;

use App\Filament\Resources\MenuGalleryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMenuGalleries extends ListRecords
{
    protected static string $resource = MenuGalleryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

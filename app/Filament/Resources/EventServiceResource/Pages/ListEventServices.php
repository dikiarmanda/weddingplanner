<?php

namespace App\Filament\Resources\EventServiceResource\Pages;

use App\Filament\Resources\EventServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventServices extends ListRecords
{
    protected static string $resource = EventServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

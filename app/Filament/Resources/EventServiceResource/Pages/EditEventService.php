<?php

namespace App\Filament\Resources\EventServiceResource\Pages;

use App\Filament\Resources\EventServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventService extends EditRecord
{
    protected static string $resource = EventServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\EsempioResource\Pages;

use App\Filament\Resources\EsempioResource;
use Filament\Pages\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditEsempio extends EditRecord
{
    protected static string $resource = EsempioResource::class;

    protected function getActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
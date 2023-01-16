<?php

namespace App\Filament\Resources\EsempioResource\Pages;

use App\Filament\Resources\EsempioResource;
use Filament\Pages\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListEsempios extends ListRecords
{
    protected static string $resource = EsempioResource::class;

    protected function getActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
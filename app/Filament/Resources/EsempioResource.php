<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EsempioResource\Pages;
use App\Models\Esempio;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;

class EsempioResource extends Resource
{
    protected static ?string $model = Esempio::class;

    protected static ?string $slug = 'esempios';

    protected static ?string $recordTitleAttribute = 'id';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEsempios::route('/'),
            'create' => Pages\CreateEsempio::route('/create'),
            'edit' => Pages\EditEsempio::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return [];
    }
}
<?php

namespace App\Filament\Resources\ValueResource\Pages;

use App\Filament\Resources\ValueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListValues extends ListRecords
{
    protected static string $resource = ValueResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

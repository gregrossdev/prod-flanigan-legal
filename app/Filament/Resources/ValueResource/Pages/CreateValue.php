<?php

namespace App\Filament\Resources\ValueResource\Pages;

use App\Filament\Resources\ValueResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateValue extends CreateRecord
{
    protected static string $resource = ValueResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}

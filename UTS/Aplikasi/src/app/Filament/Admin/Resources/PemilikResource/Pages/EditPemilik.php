<?php

namespace App\Filament\Admin\Resources\PemilikResource\Pages;

use App\Filament\Admin\Resources\PemilikResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPemilik extends EditRecord
{
    protected static string $resource = PemilikResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

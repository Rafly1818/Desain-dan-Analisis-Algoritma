<?php

namespace App\Filament\Admin\Resources\ProyekResource\Pages;

use App\Filament\Admin\Resources\ProyekResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProyek extends EditRecord
{
    protected static string $resource = ProyekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

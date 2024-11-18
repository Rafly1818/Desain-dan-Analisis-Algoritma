<?php

namespace App\Filament\Admin\Resources\PermissionsResource\Pages;

use App\Filament\Admin\Resources\PermissionsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPermissions extends EditRecord
{
    protected static string $resource = PermissionsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

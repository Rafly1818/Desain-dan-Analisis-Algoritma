<?php

namespace App\Filament\Admin\Resources\LogAktivitasResource\Pages;

use App\Filament\Admin\Resources\LogAktivitasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLogAktivitas extends EditRecord
{
    protected static string $resource = LogAktivitasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

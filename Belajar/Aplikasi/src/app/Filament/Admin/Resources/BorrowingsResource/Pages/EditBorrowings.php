<?php

namespace App\Filament\Admin\Resources\BorrowingsResource\Pages;

use App\Filament\Admin\Resources\BorrowingsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBorrowings extends EditRecord
{
    protected static string $resource = BorrowingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\BorrowingsResource\Pages;

use App\Filament\Admin\Resources\BorrowingsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBorrowings extends ListRecords
{
    protected static string $resource = BorrowingsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

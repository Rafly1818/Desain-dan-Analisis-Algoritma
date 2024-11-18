<?php

namespace App\Filament\Admin\Resources\VisitorsResource\Pages;

use App\Filament\Admin\Resources\VisitorsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVisitors extends ListRecords
{
    protected static string $resource = VisitorsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

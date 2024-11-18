<?php

namespace App\Filament\Admin\Resources\BooksResource\Pages;

use App\Filament\Admin\Resources\BooksResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBooks extends CreateRecord
{
    protected static string $resource = BooksResource::class;
}

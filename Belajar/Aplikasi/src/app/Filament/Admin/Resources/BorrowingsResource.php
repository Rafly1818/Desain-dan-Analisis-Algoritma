<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\BorrowingsResource\Pages;
use App\Models\Borrowings;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BorrowingsResource extends Resource
{
    protected static ?string $model = Borrowings::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBorrowings::route('/'),
            'create' => Pages\CreateBorrowings::route('/create'),
            'edit' => Pages\EditBorrowings::route('/{record}/edit'),
        ];
    }
}

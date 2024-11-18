<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\VisitorsResource\Pages;
use App\Models\Visitors;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class VisitorsResource extends Resource
{
    protected static ?string $model = Visitors::class;

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
            'index' => Pages\ListVisitors::route('/'),
            'create' => Pages\CreateVisitors::route('/create'),
            'edit' => Pages\EditVisitors::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\LogAktivitasResource\Pages;
use App\Filament\Admin\Resources\LogAktivitasResource\RelationManagers;
use App\Models\LogAktivitas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class LogAktivitasResource extends Resource
{
    protected static ?string $model = LogAktivitas::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Define the navigation group
    protected static ?string $navigationGroup = 'Perusahaan';
    protected static ?int $navigationSort = 1;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('tipe')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('aktivitas')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('karyawan_id')
                    ->relationship('karyawan', 'nama')
                    ->required(),
                Forms\Components\DateTimePicker::make('waktu_aktivitas')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tipe')->sortable()->searchable(),
                TextColumn::make('aktivitas')->limit(50),
                TextColumn::make('karyawan.nama')->label('Karyawan'),
                TextColumn::make('waktu_aktivitas')->dateTime(),
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
            'index' => Pages\ListLogAktivitas::route('/'),
            'create' => Pages\CreateLogAktivitas::route('/create'),
            'edit' => Pages\EditLogAktivitas::route('/{record}/edit'),
        ];
    }
}

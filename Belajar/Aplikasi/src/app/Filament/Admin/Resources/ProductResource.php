<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ProductResource\Pages;
use App\Filament\Admin\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    // Define the title for the resource
    protected static ?string $label = 'Product';
    protected static ?string $pluralLabel = 'Products';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Define the navigation group
    protected static ?string $navigationGroup = 'Product Management';
    protected static ?int $navigationSort = 1;

    // Define the pages (index, create, edit, etc.)
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }

    // Define the form view
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('Nama Produk')
                    ->label('Nama Produk')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('Harga Produk')
                    ->label('Harga Produk')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('Kategori Produk')
                    ->label('Kategori Produk')
                    ->options([
                        'Sepatu' => 'Sepatu',
                        'Sandal' => 'Sandal',
                        'Celana' => 'Celana',
                        'Baju' => 'Baju',
                        'Aksesoris' => 'Aksesoris',
                    ])
                    ->required(),
            ]);
    }
    
    // Define the table view
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('Nama Produk')
                    ->label('Nama Produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('Harga Produk')
                    ->label('Harga Produk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('Kategori Produk')
                    ->label('Kategori Produk')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
    
}

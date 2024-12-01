<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Paket;
use App\Models\Category;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PaketResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PaketResource\RelationManagers;

class PaketResource extends Resource
{
    protected static ?string $model = Paket::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static ?string $navigationGroup = 'Paket Management';

    public static function getNavigationSort(): ?int
    {
        return 2; // Angka lebih kecil = posisi lebih tinggi di group
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([

                    //image
                    Forms\Components\FileUpload::make('image')
                    ->label('Image')
                    ->required(),

                        Forms\Components\TextInput::make('name')
                            ->label('Paket Name')
                            ->required(),

                        Forms\Components\Select::make('id_kategori')
                            ->label('Category')
                            ->relationship('category', 'name')
                            ->required(),

                        Forms\Components\TextInput::make('price')
                            ->label('Price')
                            ->numeric()
                            ->required(),

                        Forms\Components\Textarea::make('description')
                            ->label('Description')
                            ->rows(5),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')->circular(),
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('category.name')->label('Category'),
                Tables\Columns\TextColumn::make('price')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
            ])
            ->filters([
                
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
            'index' => Pages\ListPakets::route('/'),
            'create' => Pages\CreatePaket::route('/create'),
            'edit' => Pages\EditPaket::route('/{record}/edit'),
        ];
    }
}

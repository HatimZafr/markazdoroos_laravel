<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CategoryPaketResource\Pages;
use App\Filament\Resources\CategoryPaketResource\RelationManagers;
use App\Models\CategoryPaket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CategoryPaketResource extends Resource
{
    protected static ?string $model = CategoryPaket::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                    Forms\Components\TextInput::make('name')
                        ->label('Category Name')
                        ->required()
                        ->unique(CategoryPaket::class, 'name'),
                    
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
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('slug'),
                Tables\Columns\TextColumn::make('description')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
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
            'index' => Pages\ListCategoryPakets::route('/'),
            'create' => Pages\CreateCategoryPaket::route('/create'),
            'edit' => Pages\EditCategoryPaket::route('/{record}/edit'),
        ];
    }
}

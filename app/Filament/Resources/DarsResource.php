<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DarsResource\Pages;
use App\Filament\Resources\DarsResource\RelationManagers;
use App\Models\Dars;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DarsResource extends Resource
{
    protected static ?string $model = Dars::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationGroup = 'Content Management';

    public static function getNavigationSort(): ?int
    {
        return 3; // Angka lebih kecil = posisi lebih tinggi di group
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->label('Dars Name')
                            ->required(),

                        Forms\Components\Select::make('id_doroos')
                            ->label('Doroos')
                            ->relationship('doroos', 'name')
                            ->required(),

                        Forms\Components\Textarea::make('content')
                            ->label('Content')
                            ->rows(10),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('doroos.name')->label('Doroos'),
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
            'index' => Pages\ListDars::route('/'),
            'create' => Pages\CreateDars::route('/create'),
            'edit' => Pages\EditDars::route('/{record}/edit'),
        ];
    }
}

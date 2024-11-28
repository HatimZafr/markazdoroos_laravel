<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DoroosResource\Pages;
use App\Filament\Resources\DoroosResource\RelationManagers;
use App\Models\Doroos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DoroosResource extends Resource
{
    protected static ?string $model = Doroos::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';
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
                            ->label('Doros Name')
                            ->required(),

                        Forms\Components\Select::make('id_paket')
                            ->label('Paket')
                            ->relationship('paket', 'name')
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('paket.name')->label('Paket'),
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
            'index' => Pages\ListDoroos::route('/'),
            'create' => Pages\CreateDoroos::route('/create'),
            'edit' => Pages\EditDoroos::route('/{record}/edit'),
        ];
    }
}

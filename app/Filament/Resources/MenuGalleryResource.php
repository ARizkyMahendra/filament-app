<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuGalleryResource\Pages;
use App\Filament\Resources\MenuGalleryResource\RelationManagers;
use App\Models\MenuGallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MenuGalleryResource extends Resource
{
    protected static ?string $model = MenuGallery::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Gallery menu';

    protected static ?string $modelLabel = 'Menu Gallery';

    protected static ?string $navigationGroup = 'Set Menu';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('label')
                    ->options([
                        'Biasa' => 'Biasa',
                        'Spesial' => 'Spesial',
                    ]),
                Forms\Components\FileUpload::make('image')
                    ->image()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->width(100)
                    ->height(100),
                Tables\Columns\TextColumn::make('label')
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenuGalleries::route('/'),
            'create' => Pages\CreateMenuGallery::route('/create'),
            'edit' => Pages\EditMenuGallery::route('/{record}/edit'),
        ];
    }
}

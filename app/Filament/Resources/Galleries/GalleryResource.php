<?php

namespace App\Filament\Resources\Galleries;

use App\Filament\Resources\Galleries\Pages;
use App\Models\Gallery;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Table;
use Filament\Tables;

class GalleryResource extends Resource
{
    protected static ?string $model = Gallery::class;
    protected static ?string $navigationLabel = 'Gallery';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            FileUpload::make('photo')->image()->directory('gallery')->required(),
            TextInput::make('caption'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('photo'),
            Tables\Columns\TextColumn::make('caption')->searchable(),
            Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'create' => Pages\CreateGallery::route('/create'),
            'edit' => Pages\EditGallery::route('/{record}/edit'),
        ];
    }
}
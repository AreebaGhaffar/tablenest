<?php

namespace App\Filament\Resources\MenuItems;

use App\Filament\Resources\MenuItems\Pages;
use App\Models\MenuItem;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Tables\Table;
use Filament\Tables;

class MenuItemResource extends Resource
{
    protected static ?string $model = MenuItem::class;
    protected static ?string $navigationLabel = 'Menu Items';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required(),
            Textarea::make('description'),
            TextInput::make('price')->numeric()->required()->prefix('$'),
            Select::make('category')->options([
                'starters' => 'Starters',
                'mains' => 'Mains',
                'desserts' => 'Desserts',
                'drinks' => 'Drinks',
            ])->required(),
            FileUpload::make('photo')->image()->directory('menu'),
            Toggle::make('active')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->searchable(),
            Tables\Columns\TextColumn::make('price')->money('USD'),
            Tables\Columns\ImageColumn::make('photo'),
            Tables\Columns\TextColumn::make('category'),
            Tables\Columns\IconColumn::make('active')->boolean(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMenuItems::route('/'),
            'create' => Pages\CreateMenuItem::route('/create'),
            'edit' => Pages\EditMenuItem::route('/{record}/edit'),
        ];
    }
}
<?php

namespace App\Filament\Resources\MenuItems\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class MenuItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Textarea::make('description')
                    ->default(null)
                    ->columnSpanFull(),
                TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                TextInput::make('photo')
                    ->default(null),
                Select::make('category')
                    ->options(['starters' => 'Starters', 'mains' => 'Mains', 'desserts' => 'Desserts', 'drinks' => 'Drinks'])
                    ->required(),
                Toggle::make('active')
                    ->required(),
            ]);
    }
}

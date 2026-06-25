<?php

namespace App\Filament\Resources\AboutContents\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Schemas\Schema;

class AboutContentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('story')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('chef_name')
                    ->required(),
                Textarea::make('chef_bio')
                    ->default(null)
                    ->columnSpanFull(),
                FileUpload::make('chef_photo')
                    ->image()
                    ->directory('about')
                    ->disk('public')
                    ->default(null),
                Textarea::make('values')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}
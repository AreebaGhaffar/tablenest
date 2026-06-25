<?php

namespace App\Filament\Resources\Staff;

use App\Filament\Resources\Staff\Pages;
use App\Models\Staff;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Table;
use Filament\Tables;

class StaffResource extends Resource
{
    protected static ?string $model = Staff::class;
    protected static ?string $navigationLabel = 'Staff';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            TextInput::make('name')->required(),
            TextInput::make('role')->required(),
            FileUpload::make('photo')->image()->directory('staff'),
            TextInput::make('order')->numeric()->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->searchable(),
            Tables\Columns\TextColumn::make('role'),
            Tables\Columns\ImageColumn::make('photo'),
            Tables\Columns\TextColumn::make('order')->sortable(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStaff::route('/'),
            'create' => Pages\CreateStaff::route('/create'),
            'edit' => Pages\EditStaff::route('/{record}/edit'),
        ];
    }
}
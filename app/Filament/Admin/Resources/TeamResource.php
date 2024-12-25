<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\TeamResource\Pages;
use App\Filament\Admin\Resources\TeamResource\RelationManagers;
use App\Models\Team;
use Filament\Actions\CreateAction;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\CheckboxColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TeamResource extends Resource
{
    protected static ?string $model = Team::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Enter Name Here'),
                TextInput::make('designation')
                    ->maxLength(255)
                    ->placeholder('Enter Designation Here'),
                TextInput::make('fb_url')
                    ->maxLength(255)
                    ->label('Facebook URL'),
                TextInput::make('tw_url')
                    ->maxLength(255)
                    ->label('Twitter URL'),
                TextInput::make('ig_url')
                    ->maxLength(255)
                    ->label('Instagram URL'),
                FileUpload::make('image')
                    ->image(),
                Select::make('status')
                    ->required()
                    ->options([
                        1 => 'Active',
                        0 => 'Disabled'
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image'),
                TextColumn::make('name')
                    ->searchable(),
                TextColumn::make('designation')
                    ->searchable(),
                TextColumn::make('fb_url')
                    ->searchable()
                    ->label('Facebook URL'),
                TextColumn::make('tw_url')
                    ->searchable()
                    ->label('Twitter URL'),
                TextColumn::make('ig_url')
                    ->searchable()
                    ->label('Instagram URL'),

                CheckboxColumn::make('status'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                // CreateAction::make()->successRedirectUrl(route('/')),
         
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
            'index' => Pages\ListTeams::route('/'),
            'create' => Pages\CreateTeam::route('/create'),
            'edit' => Pages\EditTeam::route('/{record}/edit'),
        ];
    }
}
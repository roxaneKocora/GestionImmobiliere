<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookingResource\Pages;
use App\Filament\Resources\BookingResource\RelationManagers;
use App\Models\Booking;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;
use App\Models\User;
use App\Models\Property;

class BookingResource extends Resource
{
    protected static ?string $model = Booking::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
       /* return $form->schema([
            Forms\Components\TextInput::make('user_id')->required(),
            Forms\Components\Textarea::make('property_id')->required(),
            Forms\Components\TextInput::make('start_date')->required(),
            Forms\Components\TextInput::make('end_date')->required(),
        ]);*/

        return $form->schema([
            Select::make('user_id')
                ->label('Utilisateur')
                ->options(User::pluck('name', 'id'))
                ->searchable()
                ->required(),

            Select::make('property_id')
                ->label('Propriété')
                ->options(Property::pluck('name', 'id'))
                ->searchable()
                ->required(),

            Forms\Components\DatePicker::make('start_date')
                ->label('Date de début')
                ->required(),

            Forms\Components\DatePicker::make('end_date')
                ->label('Date de fin')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Utilisateur'),
                Tables\Columns\TextColumn::make('property.name')->label('Propriété'),
                Tables\Columns\TextColumn::make('start_date')->label('Début'),
                Tables\Columns\TextColumn::make('end_date')->label('Fin'),
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
            'index' => Pages\ListBookings::route('/'),
            'create' => Pages\CreateBooking::route('/create'),
            'edit' => Pages\EditBooking::route('/{record}/edit'),
        ];
    }
}

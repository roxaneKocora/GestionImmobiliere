<?php

namespace App\Filament\Auth;

use Filament\Http\Livewire\Auth\Login as BaseLogin;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Components\Actions\Action;
use Filament\Facades\Filament;

class CustomLogin extends BaseLogin
{
    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('email')
                ->label('Adresse e-mail')
                ->email()
                ->required()
                ->autocomplete(),

            TextInput::make('password')
                ->label('Mot de passe')
                ->password()
                ->required(),

            Forms\Components\Checkbox::make('remember')
                ->label('Se souvenir de moi'),

                Action::make('register')
                ->label("Créer un compte")
                ->url(route('filament.auth.register')) // Redirection vers la page d'inscription
                ->color('primary'),
        ]);
    }
}

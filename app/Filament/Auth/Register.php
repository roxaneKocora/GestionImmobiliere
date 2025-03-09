<?php

namespace App\Filament\Auth;

use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Auth\Register as BaseRegister;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Register extends BaseRegister
{
    public function form(Form $form): Form
    {
        return $form->schema([
            TextInput::make('name')
                ->label('Nom')
                ->required(),

            TextInput::make('email')
                ->label('Adresse e-mail')
                ->email()
                ->required()
                ->unique(User::class, 'email'),

            TextInput::make('password')
                ->label('Mot de passe')
                ->password()
                ->required()
                ->minLength(6),

            TextInput::make('password_confirmation')
                ->label('Confirmer le mot de passe')
                ->password()
                ->required()
                ->same('password'),
        ]);
    }

    public function register(): void
    {
        $data = $this->form->getState();

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'is_admin' => true, // Assurez-vous que ce champ existe dans la table users
        ]);

        Notification::make()
            ->title('Inscription réussie')
            ->success()
            ->send();

        auth()->login($user);

        redirect(Filament::getUrl());
    }
}

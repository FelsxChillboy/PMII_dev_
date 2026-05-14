<?php

namespace App\Filament\Resources\Anggotas;

use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Schemas\schema;

class AnggotaForm
{
    public static function configure(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_lengkap')->required(),
                TextInput::make('email')->email()->required(),
                TextInput::make('telepon')->tel()->required(),
                TextInput::make('instansi'),
                Textarea::make('alasan_bergabung')->required(),
                Select::make('status')
                    ->options([
                        'pending' => 'Pending',
                        'approved' => 'Approved',
                        'rejected' => 'Rejected',
                    ])->default('pending'),
            ]);
    }
}

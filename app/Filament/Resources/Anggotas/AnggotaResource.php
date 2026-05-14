<?php

namespace App\Filament\Resources\Anggotas;

use App\Filament\Resources\Anggotas\Pages;
use App\Filament\Resources\Anggotas\Schemas\AnggotaForm;
use App\Filament\Resources\Anggotas\Tables\AnggotasTable;
use App\Models\Anggota;
use Filament\Schemas\Schema; // <-- Ini yang benar, jangan pakai Form lagi
use Filament\Resources\Resource;
use Filament\Tables\Table;

class AnggotaResource extends Resource
{
    protected static ?string $model = Anggota::class;

    protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Pendaftaran Anggota';

    protected static ?string $slug = 'pendaftaran-anggota';

    // Parameter dan tipe data WAJIB Schema
    public static function form(Schema $schema): Schema
    {
        return AnggotaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AnggotasTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAnggotas::route('/'),
            'create' => Pages\CreateAnggota::route('/create'),
            'edit' => Pages\EditAnggota::route('/{record}/edit'),
        ];
    }
}

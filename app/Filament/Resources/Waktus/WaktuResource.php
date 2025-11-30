<?php

namespace App\Filament\Resources\Waktus;

use App\Filament\Resources\Waktus\Pages\ManageWaktus;
use App\Models\Waktu;
use BackedEnum;
use Dom\Text;
use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WaktuResource extends Resource
{
    protected static ?string $model = Waktu::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedClock;

    public static function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                // sesuaikan dengan skema migrasi saya
                DatePicker::make('tanggal')->date(),
                TimePicker::make('waktu_mulai')->time(),
                TimePicker::make('waktu_selesai')->time(),
            ])
            ->columns(1);
    }

    public static function infolist(Schema $schema): Schema
    {
        return $schema
            ->components([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('tanggal')->label('Tanggal')->date(),
                TextColumn::make('waktu_mulai')->label('Mulai')->time(),
                TextColumn::make('waktu_selesai')->label('Selesai')->time(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ActionGroup::make([

                    EditAction::make(),
                    DeleteAction::make(),
                ]),
            ])
            ->toolbarActions([
            ])
            ->paginated(false);
    }

    public static function getPages(): array
    {
        return [
            'index' => ManageWaktus::route('/'),
        ];
    }
}

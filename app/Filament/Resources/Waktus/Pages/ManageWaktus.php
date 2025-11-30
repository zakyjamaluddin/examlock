<?php

namespace App\Filament\Resources\Waktus\Pages;

use App\Filament\Resources\Waktus\WaktuResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ManageRecords;
use Filament\Support\Enums\Width;

class ManageWaktus extends ManageRecords
{
    protected static string $resource = WaktuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()->modalWidth(Width::Medium),
        ];
    }
}

<?php

namespace App\Filament\Resources\BannerResource\Pages;

use App\Filament\Resources\BannerResource;
use App\Models\Banner;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditBanner extends EditRecord
{
    protected static string $resource = BannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function (Banner $record) {
                    if ($record->content) {
                        Storage::disk('public')->delete($record->content);
                    }
                }
            ),
        ];
    }
}

<?php

namespace App\Filament\Resources\BlogCategoryResource\Pages;

use App\Filament\Resources\BlogCategoryResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\EditRecord;

class EditBlogCategory extends EditRecord
{
    protected static string $resource = BlogCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getSavedNotification(): ?Notification
{
    return Notification::make()
        ->success()
        ->title('Categpry Updated')
        ->body('Categpry updated successfully.');
}
}

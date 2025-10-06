<?php

namespace App\Filament\Widgets;

use App\Models\Product;
use Filament\Tables;
use Filament\Widgets\TableWidget as BaseWidget;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\CreateAction;

class LatestProducts extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';

    protected function getTableQuery(): \Illuminate\Database\Eloquent\Builder
    {
        return Product::query()->latest()->limit(5);
    }

    protected function getTableColumns(): array
    {
        return [
            TextColumn::make('name')->label('Nom'),
            TextColumn::make('price')->label('Prix')->money('eur', true),
            TextColumn::make('stock')->label('Stock'),
        ];
    }

    protected function getTableActions(): array
    {
        return [
            EditAction::make(), // bouton "Modifier"
        ];
    }

    protected function getTableHeaderActions(): array
    {
        return [
            CreateAction::make(), // bouton "Ajouter un produit"
        ];
    }

    public static function canView(): bool
    {
        return auth()->check() && auth()->user()->role === 'admin';
    }
}

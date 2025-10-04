<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\User;

class UserStats extends StatsOverviewWidget
{
    protected function getCards(): array
    {
        return [
           Card::make('Total utilisateurs', User::count()),
            Card::make('Inscriptions aujourd’hui', User::whereDate('created_at', today())->count()),
            Card::make('Inscriptions ce mois-ci', User::whereMonth('created_at', now()->month)->count()),
        ];
   
    }

    public static function canView(): bool
    {
        return true;
        $user = auth()->user();
        return $user && $user->hasRole('admin');

      //  return $user && $user->role === 'admin';
    }
}

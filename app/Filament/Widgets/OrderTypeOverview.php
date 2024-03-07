<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget\Card;
use App\Models\Order;

use App\Models\Table;

class OrderTypeOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Pedidos sin entregar', Order::count()),
            
            Stat::make('Pedidos entregados', Table::where('paid', true)->count()),

        ];
    }
}

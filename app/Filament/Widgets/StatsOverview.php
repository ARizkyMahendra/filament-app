<?php

namespace App\Filament\Widgets;

use App\Models\transaksi;
use Carbon\Carbon;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    use InteractsWithPageFilters;

    protected function getStats(): array
    {

        $startDate = ! is_null($this->filters['startDate'] ?? null) ?
            Carbon::parse($this->filters['startDate']) :
            null;

        $endDate = ! is_null($this->filters['endDate'] ?? null) ?
            Carbon::parse($this->filters['endDate']) :
            now();

        $TCostumer = transaksi::whereBetween('date_join', [$startDate, $endDate])
            ->count('id');
        $Pemasukan = transaksi::where('status', 'success')
            ->whereBetween('date_join', [$startDate, $endDate])
            ->sum('harga');

        return [
            Stat::make('Total Costumer', $TCostumer),
            Stat::make('Total Pemasukan', $Pemasukan),
        ];
    }
}

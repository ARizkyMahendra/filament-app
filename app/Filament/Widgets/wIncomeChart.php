<?php

namespace App\Filament\Widgets;

use App\Models\transaksi;
use Illuminate\Support\Carbon;
use Filament\Widgets\ChartWidget;
use Filament\Widgets\Concerns\InteractsWithPageFilters;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class wIncomeChart extends ChartWidget
{
    use InteractsWithPageFilters;
    
    protected static ?string $heading = 'Income / Pemasukan';

    protected static string $color = 'success';

    protected function getData(): array
    {

        $startDate = ! is_null($this->filters['startDate'] ?? null) ?
            Carbon::parse($this->filters['startDate']) :
            null;

        $endDate = ! is_null($this->filters['endDate'] ?? null) ?
            Carbon::parse($this->filters['endDate']) :
            now();
            
        $data = Trend::model(transaksi::class)
            ->between(
                start: $startDate,
                end: $endDate,
            )
            ->perDay()
            ->sum('harga');
        // dd($data);
        return [
            'datasets' => [
                [
                    'label' => 'Pemasukan',
                    'data' => $data->map(fn(TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn(TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

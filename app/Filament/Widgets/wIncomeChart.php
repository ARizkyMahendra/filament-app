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

        $startDate = $this->filters['startDate'];

        $endDate = $this->filters['endDate'];
            
        $data = Trend::model(transaksi::class)
            ->between(
                start: $startDate ? Carbon::parse($startDate) : now()->subMonths(2),
                end: $endDate ? Carbon::parse($endDate) : now(),
            )
            ->perDay()
            ->sum('harga');
         //dd($data);
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

<?php

namespace App\Livewire;

use Filament\Widgets\ChartWidget;

class LoanStats extends ChartWidget
{
    protected static ?string $heading = 'Loan Stats';

    protected function getData(): array
    {
        return [
            'dataset' => [
                [
                    'label' => 'Loan Approvals',
                    'data' => [10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],

            //
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}

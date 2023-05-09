<?php

namespace App\Http\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class VisitorCharts
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        return $this->chart->lineChart()
        ->setTitle('Sales during 2021.')
        ->addData('Physical sales', [40, 70, 35, 42, 18, 70])
        ->addData('Digital sales', [70, 29, 77, 28, 55, 45])
        ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June'])
        ->setHeight(280)
        ->toVue();
    }
}

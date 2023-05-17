<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Charts\VisitorCharts;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    // index function dashboard
    public function index(VisitorCharts $chart)
    {
        return Inertia::render('Dashboard/Index', ['chart' => $chart->build()]);
    }

    // master function dashboard
    public function masterPages()
    {
        return Inertia::render('Dashboard/Master/Index', []);
    }

    // master produk
    public function masterProduk()
    {
        return Inertia::render('Dashboard/Master/Produk/Index', ['produk' => null]);
    }

}

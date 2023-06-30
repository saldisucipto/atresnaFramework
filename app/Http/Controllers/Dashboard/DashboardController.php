<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Charts\VisitorCharts;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Data\MasterDataController;
use Inertia\Inertia;
use App\Models\Produk;
use App\Models\KategoriProduk;

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
        return Inertia::render('Dashboard/Master/Index');
    }

    // master produk
    public function masterProduk()
    {
        return Inertia::render('Dashboard/Master/Produk/Index', ['produk' => MasterDataController::ambilSemuaData(new Produk(), ['kategoriProduk', 'brandProduk'])]);
    }

    // master kategori produk
    public function kategoriProduk()
    {
        return Inertia::render('Dashboard/Master/Produk/Kategori/Index', ['produk' => MasterDataController::ambilSemuaData(new KategoriProduk()), 'message' => null]);
    }


}

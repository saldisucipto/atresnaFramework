<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Charts\VisitorCharts;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Data\MasterDataController;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Produk;

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
        $data = new MasterDataController(new Produk());
        return Inertia::render('Dashboard/Master/Produk/Index', ['produk' => $data->ambilSemuaData(['kategoriProduk', 'brandProduk'])]);
    }

    // master kategori produk
    public function kategoriProduk()
    {
        $data = new MasterDataController(new Produk());
        return Inertia::render('Dashboard/Master/Produk/Kategori/Index', ['produk' => $data->ambilSemuaData(['kategoriProduk', 'brandProduk'])]);

    }

}

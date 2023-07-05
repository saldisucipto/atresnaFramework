<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Charts\VisitorCharts;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Data\MasterDataController;
use Inertia\Inertia;
use App\Models\Produk;
use App\Models\KategoriProduk;
use App\Models\BrandProduk;
use App\Models\Servis;

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
        return Inertia::render('Dashboard/Master/Produk/Index', ['produk' => MasterDataController::ambilSemuaData(new Produk(), ['kategoriProduk', 'brandProduk', 'imagesProduk']), 'kategoriProduk' => MasterDataController::ambilSemuaData(new KategoriProduk()), 'brandProduk' => MasterDataController::ambilSemuaData(new BrandProduk()),]);
    }

    // master kategori produk
    public function kategoriProduk()
    {
        return Inertia::render('Dashboard/Master/Produk/Kategori/Index', ['produk' => MasterDataController::ambilSemuaData(new KategoriProduk()), 'message' => null]);
    }

    // master brand produk
    public function brandProduk()
    {
        return Inertia::render('Dashboard/Master/Produk/Brand/Index', ['produk' => MasterDataController::ambilSemuaData(new BrandProduk()), 'message' => null]);
    }

    // master servis
    public function masterServis()
    {
        return Inertia::render('Dashboard/Master/Servis/Index', ['servis' => MasterDataController::ambilSemuaData(new Servis()),'message' => null]);
    }


}

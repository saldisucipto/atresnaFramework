<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Charts\VisitorCharts;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Data\KonfigurasiDataController;
use App\Http\Controllers\Data\MasterDataController;
use Inertia\Inertia;
use App\Models\Produk;
use App\Models\KategoriProduk;
use App\Models\BrandProduk;
use App\Models\CompanyInfo;
use App\Models\Customer;
use App\Models\Servis;
use App\Models\StaticPages;

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
        return Inertia::render('Dashboard/Master/Servis/Index', ['servis' => MasterDataController::ambilSemuaData(new Servis()), 'message' => null]);
    }

    // company
    public function masterCompany()
    {
        return Inertia::render('Dashboard/Master/Company/Index', ['servis' => MasterDataController::ambilSemuaData(new Servis()), 'message' => null]);
    }

    // customer
    public function masterCustomer()
    {
        return Inertia::render('Dashboard/Master/Customer/Index', ['customer' => MasterDataController::ambilSemuaData(new Customer()), 'message' => null]);
    }

    // konfigurasi pages
    public function konfigurasiPages()
    {
        return Inertia::render('Dashboard/Konfigurasi/Index');
    }

    // company konfigurasi
    public function konfigurasiCompany()
    {
        return Inertia::render('Dashboard/Konfigurasi/Company/Index', ['data' => KonfigurasiDataController::ambilDataTunggal(new CompanyInfo()), 'message' => null]);
    }

    // static pages
    public function staticPages()
    {
        return Inertia::render('Dashboard/Pages/Index', ['data' => MasterDataController::ambilSemuaData(new StaticPages()), 'message' => null]);
    }
}

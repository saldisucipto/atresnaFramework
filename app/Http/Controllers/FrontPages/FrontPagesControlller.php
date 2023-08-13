<?php

namespace App\Http\Controllers\FrontPages;

use App\Http\Controllers\Controller;
use App\Http\Utils\Meta;
use App\Models\CompanyInfo;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Produk;
use Illuminate\Support\Str;

class FrontPagesControlller extends Controller
{
    // Home Pages
    public function index()
    {
        $companyInfo = CompanyInfo::where('id', 1)->get(['company_name', 'company_slogan', 'company_logo', 'company_address', 'company_email', 'company_phone',]);
        $sliders = Slider::get();
        $meta = new Meta($companyInfo[0]->company_name . ' - ' . Meta::$keyWord, $companyInfo[0]->company_slogan, '/storage/img/company/1688973722-admin-atresna-creative.jpg');
        return view('index', ['companyInfo' => $companyInfo[0], 'sliders' => $sliders, 'title' => Meta::getTitle()]);
    }

    // Produk and Servis Pages
    public function produkPages()
    {
        $companyInfo = CompanyInfo::where('id', 1)->get(['company_name', 'company_slogan', 'company_logo', 'company_address', 'company_email', 'company_phone',]);
        $sliders = Slider::get();
        $meta = new Meta('Produk' . ' - ' . Meta::$keyWord, 'Produk Pengolahan Air Bersih dan Air Limbah', '/storage/img/company/1688973722-admin-atresna-creative.jpg');
        return view('pages.produk.produk', ['companyInfo' => $companyInfo[0], 'sliders' => $sliders, 'title' => Meta::getTitle()]);
    }

    // Produk Detail Pages
    public function produkDetailsPages($slugs = null)
    {
        $companyInfo = CompanyInfo::where('id', 1)->get(['company_name', 'company_slogan', 'company_logo', 'company_address', 'company_email', 'company_phone',]);
        $produk = Produk::where('slugs', $slugs)->with(['kategoriProduk', 'brandProduk', 'imagesProduk'])->first();
        $meta = new Meta($produk->nama_produk, Str::limit($produk->deskripsi_produk, 290, '.'), '/storage/img/produk/' . $produk->imagesProduk[0]->gambar_produk);
        return view('pages.produk.produk-detail', ['companyInfo' => $companyInfo[0], 'title' => Meta::getTitle(), 'produk' => $produk]);
    }
}

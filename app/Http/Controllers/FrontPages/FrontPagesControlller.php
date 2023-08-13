<?php

namespace App\Http\Controllers\FrontPages;

use App\Http\Controllers\Controller;
use App\Http\Utils\Meta;
use App\Models\BrandProduk;
use App\Models\CompanyInfo;
use App\Models\KategoriProduk;
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


    // Produk By Ketegori
    public function produkByKategori($slugs)
    {
        $companyInfo = CompanyInfo::where('id', 1)->get(['company_name', 'company_slogan', 'company_logo', 'company_address', 'company_email', 'company_phone',]);
        $kategoriProduk = KategoriProduk::where('slugs', $slugs)->with(['produk'])->first();
        $meta = new Meta($kategoriProduk->nama_kategori, Str::limit($kategoriProduk->deskripsi_kategori, 250, '.'), '/storage/img/kategori-produk/' . $kategoriProduk->gambar_produk);
        return view('pages.produk.produk-by-kategori', ['companyInfo' => $companyInfo[0], 'title' => Meta::getTitle(), 'kategoriProduk' => $kategoriProduk]);
    }

    // Produk By Brand
    public function produkByBrand($slugs)
    {
        $companyInfo = CompanyInfo::where('id', 1)->get(['company_name', 'company_slogan', 'company_logo', 'company_address', 'company_email', 'company_phone',]);
        $brandProduk = BrandProduk::where('slugs', $slugs)->with(['produk'])->first();
        $meta = new Meta($brandProduk->nama_brand, Str::limit($brandProduk->deskripsi_brand, 250, '.'), '/storage/img/brand-produk/' . $brandProduk->gambar_brand);
        return view('pages.produk.produk-by-brand', ['companyInfo' => $companyInfo[0], 'title' => Meta::getTitle(), 'brandProduk' => $brandProduk]);
    }
}

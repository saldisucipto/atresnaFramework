<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Charts\VisitorCharts;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Data\MasterDataController;
use App\Http\Utils\FileProcess;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Produk;
use Illuminate\Support\Str;

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
        $data = new MasterDataController(new KategoriProduk());
        return Inertia::render('Dashboard/Master/Produk/Kategori/Index', ['produk' => $data->ambilSemuaData(), 'message' => null]);
    }

    // create kategori produk
      // CREATE KATEGORI PRODUK
      public function createKategoriData(Request $createDataKategori)
      {
          //   dd($createDataKategori);
          $createDataKategori->validate([
                'nama_kategori' => 'required|string',
                'gambar_produk' => 'file|max:4000|mimes:png,jpg'
          ]);
          $kategoriProduk = new KategoriProduk();
          $photoKategoriProduk = new FileProcess($createDataKategori->file('gambar_produk'), $createDataKategori['nama_kategori'], 'kategori-produk');
          $kategoriProduk->nama_kategori = $createDataKategori['nama_kategori'];
          $kategoriProduk->slugs = Str::slug($createDataKategori['nama_kategori']);
          $kategoriProduk->deskripsi_kategori = $createDataKategori['deskripsi_kategori'];
          $kategoriProduk->gambar_produk = $photoKategoriProduk->uploadFoto();
          $kategoriProduk->save();

          return redirect()->back()->with('message', 'Berhasil Menambahkan File Data');
      }

}

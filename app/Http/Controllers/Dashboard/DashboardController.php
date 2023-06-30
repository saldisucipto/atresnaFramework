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
use Illuminate\Support\Facades\DB;

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


    //   delete
    public function deleteKategoriData(Request $request)
    {
        // $katProduk = KategoriProduk::where('id', $request->all())->delete();
        DB::table("kategori_produk")->whereIn('id', $request->all())->delete();
        // dd($request->all());
    }

    public function updateDataKategoriData(Request $request, $id = null)
    {
        $request->validate([
            'nama_kategori' => 'string',
      ]);

        $data = KategoriProduk::find($id);
        $data->nama_kategori = $request['nama_kategori'];
        $data->slugs = Str::slug($request['nama_kategori']);
        $data->deskripsi_kategori = $request['deskripsi_kategori'];
        FileProcess::deleteFoto($data->gambar_produk, 'kategori-produk');
        if($request->file('gambar_produk')) {
            $photoKategoriProduk = new FileProcess($request->file('gambar_produk'), $request['nama_kategori'], 'kategori-produk');
            $data->gambar_produk = $photoKategoriProduk->uploadFoto();
        }
        $data->update();
        return redirect()->back()->with('message', 'Berhasil Memperbaharui Katgeori Produk Data');
    }

    public function deleteSingleKategoriData($id = null)
    {
        $data = KategoriProduk::find($id);
        FileProcess::deleteFoto($data->gambar_produk, 'kategori-produk');
        $data->delete();
        return redirect()->back()->with('message', 'Berhasil Menghapus Kategori Produk Data');
    }

}

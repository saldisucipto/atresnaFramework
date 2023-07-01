<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use App\Http\Utils\FileProcess;
use App\Models\BrandProduk;
use App\Models\ImagesProduk;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MasterDataController extends Controller
{
    // METHOD GET DATA
    public static function ambilSemuaData(Model $dataModel, array $relation = [])
    {
        if($relation != []) {
            $data = $dataModel->with($relation)->paginate(10);
        } else {
            $data = $dataModel->paginate(10);
        }
        return $data;
    }

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
        if($request->file('gambar_produk')) {
            FileProcess::deleteFoto($data->gambar_produk, 'kategori-produk');
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


    // Brand Produk
    public function createBrandData(Request $createDataBrand)
    {
        $createDataBrand->validate([
            'nama_brand' => 'required|string',
            'gambar_brand' => 'file|max:4000|mimes:png,jpg'
      ]);
        $brandProduk = new BrandProduk();
        $photoBrandProduk = new FileProcess($createDataBrand->file('gambar_brand'), $createDataBrand['nama_brand'], 'brand-produk');
        $brandProduk->nama_brand = $createDataBrand['nama_brand'];
        $brandProduk->slugs = Str::slug($createDataBrand['nama_brand']);
        $brandProduk->deskripsi_brand = $createDataBrand['deskripsi_brand'];
        $brandProduk->gambar_brand = $photoBrandProduk->uploadFoto();
        $brandProduk->save();

        return redirect()->back()->with('message', 'Berhasil Menambahkan Brand Produk');
    }


    public function deleteBrandData(Request $request)
    {
        DB::table("brand_produk")->whereIn('id', $request->all())->delete();
        return redirect()->back()->with('message', 'Berhasil Menghapus Brand Produk');
    }


    public function updateDataBrandData(Request $request, $id = null)
    {
        $request->validate([
            'nama_brand' => 'string',
            'gambar_brand' => 'mimes:png,jpg|nullable'

       ]);

        $data = BrandProduk::find($id);
        $data->nama_brand = $request['nama_brand'];
        $data->slugs = Str::slug($request['nama_brand']);
        $data->deskripsi_brand = $request['deskripsi_brand'];
        if($request->file('gambar_brand')) {
            FileProcess::deleteFoto($data->gambar_brand, 'brand-produk');
            $photoBrandProduk = new FileProcess($request->file('gambar_brand'), $request['nama_brand'], 'brand-produk');
            $data->gambar_brand = $photoBrandProduk->uploadFoto();
        }
        $data->update();
        return redirect()->back()->with('message', 'Berhasil Memperbaharui Brand Produk');
    }

    public function deleteSingleBrandData($id)
    {
        $data = BrandProduk::find($id);
        FileProcess::deleteFoto($data->gambar_brand, 'brand-produk');
        $data->delete();
        return redirect()->back()->with('message', 'Berhasil Menghapus Brand Data');
    }

    // Produk
    public function createProdukData(Request $createProduk)
    {
        $createProduk->validate([
            'nama_produk' => 'required|string|min:4',
            'id_kategori' => 'required',
            'id_brand' => 'required',
            'satuan_produk' => 'required',
            'kondisi_produk' => 'required',
            'harga_produk' => 'required|numeric',
            'stok_produk' => 'required|numeric',
            'deskripsi_produk' => 'required',
        ]);

        $produk = new Produk();
        $produk->nama_produk = $createProduk['nama_produk'];
        $produk->slugs = Str::slug($createProduk['nama_produk']);
        $produk->id_kategori = $createProduk['id_kategori'];
        $produk->id_brand = $createProduk['id_brand'];
        $produk->satuan_produk = $createProduk['satuan_produk'];
        $produk->kondisi_produk = $createProduk['kondisi_produk'];
        $produk->harga_produk = $createProduk['harga_produk'];
        $produk->stok_produk = $createProduk['stok_produk'];
        $produk->deskripsi_produk = $createProduk['deskripsi_produk'];
        $produk->save();
        $uploadFotoProduk = new FileProcess($createProduk->file('gambar_produk'), Str::slug($createProduk['nama_produk']), 'produk');
        $uploadFotoProduk->multipleUploadFoto($createProduk, 'gambar_produk', $produk->id, 'ImagesProduk');
        return redirect()->back()->with('message', 'Berhasil Menyimpan Data Produk');

    }


}

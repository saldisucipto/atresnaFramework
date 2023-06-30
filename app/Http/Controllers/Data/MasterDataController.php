<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use App\Models\KategoriProduk;
use Illuminate\Http\Request;
use App\Http\Utils\FileProcess;
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

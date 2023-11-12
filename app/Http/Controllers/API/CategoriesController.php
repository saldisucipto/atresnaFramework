<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\ProductCategories;
use Illuminate\Http\Request;
use App\Http\Utils\ResponseFormater;


class CategoriesController extends Controller
{
    // all get data
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $name = $request->input('name');
        $show_product = $request->input('show_product');

        // Jika id ada isinya maka akan mnegembalikan Product Per Kategori
        if ($id) {
            $categories = ProductCategories::with(['products'])->find($id);

            if ($categories) {
                return ResponseFormater::success($categories, 'Data Berhasil Di Ambil');
            } else {
                return ResponseFormater::error(
                    null,
                    'Data Produk Tidak ada',
                    404
                );
            }
        }

        $categories = ProductCategories::query();
        if ($name) {
            $categories->where('name', 'like', '%' . $name . '%');
        }

        if ($show_product) {
            $categories->with('products');
        }

        return ResponseFormater::success(
            $categories->paginate($limit),
            'Data Produk Berhasil',
        );
    }
}

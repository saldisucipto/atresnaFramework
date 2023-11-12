<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Utils\ResponseFormater;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // get data
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit');
        $name = $request->input('name');
        $description = $request->input('description');
        $tags = $request->input('tags');
        $categories = $request->input('categories');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        // Jika id ada isinya maka akan mnegembalikan Product Per Kategori
        if ($id) {
            $product = Product::with(['galleries', 'category'])->find($id);

            if ($product) {
                return ResponseFormater::success($product, 'Data Berhasil Di Ambil');
            } else {
                return ResponseFormater::error(
                    null,
                    'Data Produk Tidak ada',
                    404
                );
            }
        }

        $product = Product::with(['galleries', 'category']);
        if ($name) {
            $product->where('name', 'like', '%' . $name . '%');
        }

        if ($description) {
            $product->where('description', 'like', '%' . $description . '%');
        }
        if ($tags) {
            $product->where('tags', 'like', '%' . $tags . '%');
        }
        if ($price_from) {
            $product->where('price_from', '>=', $price_from);
        }
        if ($price_to) {
            $product->where('price_to', '<=', $price_to);
        }
        if ($categories) {
            $product->where('categories', $categories);
        }

        return ResponseFormater::success(
            $product->paginate($limit),
            'Data Produk Berhasil',
        );
    }
}

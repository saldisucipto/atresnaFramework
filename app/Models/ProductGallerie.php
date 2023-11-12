<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class ProductGallerie extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_galleries';

    protected $fillable = [
        'products_id',
        'url',
    ];


    /**
     * Method yang secara ototmatis memberikan attributr URL pada saat Penggunaan ROW url
     */
    public function getUrlAttribute($url)
    {
        return config('app.url') . Storage::url($url);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategories extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'product_categories';

    /**
     * Filable row pada table productkategori
     */
    protected $fillable = [
        'name'
    ];

    /**
     * Relations TABLE
     */
    public function products()
    {
        return $this->hasMany(Product::class, 'categories_id', 'id');
    }
}

<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\SecondaryCategory;
use App\Models\Image;
use App\Models\Stock;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    protected $fillable = [
        'shop_id',
        'name',
        'information',
        'price',
        'is_selling',
        'sort_order',
        'secondary_category_id',
        'image1',
        'image2',
        'image3',
        'image4',
    ];

    /**
     * For Shop relation.
     */
    public function shop() {
        return $this->belongsTo(Shop::class);
    }

    /**
     * For SecondaryCategory relation.
     */
    public function category() {
        return $this->belongsTo(SecondaryCategory::class, 'secondary_category_id');
    }

    /**
     * For Image relation.
     */
    public function imageFirst() {
        return $this->belongsTo(Image::class, 'image1', 'id');
    }

    /**
     * For Product relation.
     */
    public function stock() {
        return $this->hasMany(Stock::class);
    }
}
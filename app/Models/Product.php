<?php

namespace App\Models;

use App\Models\Shop;
use App\Models\SecondaryCategory;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

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
}

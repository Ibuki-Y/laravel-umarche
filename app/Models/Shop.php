<?php

namespace App\Models;

use App\Models\Owner;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model {
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'name',
        'information',
        'filename',
        'is_selling',
    ];

    /**
     * For Owner relation.
     */
    public function owner() {
        return $this->belongsTo(Owner::class);
    }

    /**
     * For Product relation.
     */
    public function product() {
        return $this->hasMany(Product::class);
    }
}

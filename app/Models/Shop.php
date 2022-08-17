<?php

namespace App\Models;

use App\Models\Owner;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model {
    use HasFactory;

    /**
     * For Owner relation.
     */
    public function owner() {
        return $this->belongsTo(Owner::class);
    }
}

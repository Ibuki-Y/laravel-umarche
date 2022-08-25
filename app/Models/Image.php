<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Owner;

class Image extends Model {
    use HasFactory;

    protected $fillable = [
        'owner_id',
        'filename',
    ];

    /**
     * For Owner relation.
     */
    public function owner() {
        return $this->belongsTo(Owner::class);
    }
}

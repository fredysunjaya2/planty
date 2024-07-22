<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubsTier extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function subsCategories(): HasMany{
        return $this->hasMany(SubsCategory::class);
    }

    public function galleries(): HasMany {
        return $this->hasMany(Gallery::class);
    }
}

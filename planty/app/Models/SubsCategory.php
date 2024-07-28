<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubsCategory extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['subsTier'];

    public function getRouteKeyName() {
        return 'slug';
    }

    public function subsTier(): BelongsTo {
        return $this->belongsTo(SubsTier::class);
    }

    public function transactions(): HasMany {
        return $this->hasMany(Transaction::class);
    }
}

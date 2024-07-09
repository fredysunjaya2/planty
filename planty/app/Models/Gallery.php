<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Gallery extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['subsTier', 'plant'];

    public function subsTier(): BelongsTo {
        return $this->belongsTo(SubsTier::class);
    }

    public function plant(): BelongsTo {
        return $this->belongsTo(Plant::class);
    }
}

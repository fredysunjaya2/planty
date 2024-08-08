<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['user', 'subsCategory', 'address'];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function subsCategory(): BelongsTo {
        return $this->belongsTo(SubsCategory::class);
    }

    public function address(): BelongsTo {
        return $this->belongsTo(Address::class);
    }

    public function gift(): HasOne {
        return $this->hasOne(Gift::class);
    }
}

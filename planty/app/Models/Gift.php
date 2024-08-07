<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gift extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $with = ['transaction'];

    public function transaction(): BelongsTo {
        return $this->belongsTo(Transaction::class);
    }
}

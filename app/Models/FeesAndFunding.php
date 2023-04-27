<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FeesAndFunding extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function feesAndFunding(): BelongsTo
    {
        return $this->belongsTo(FeesAndFunding::class, 'course_id');
    }
}

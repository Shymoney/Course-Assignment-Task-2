<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\FeesAndFunding
 *
 * @property int $id
 * @property int $course_id
 * @property string $year
 * @property string|null $uk_full_time
 * @property string|null $uk_part_time
 * @property string|null $international_full_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read FeesAndFunding $feesAndFunding
 * @method static \Database\Factories\FeesAndFundingFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|FeesAndFunding newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeesAndFunding newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FeesAndFunding query()
 * @method static \Illuminate\Database\Eloquent\Builder|FeesAndFunding whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeesAndFunding whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeesAndFunding whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeesAndFunding whereInternationalFullTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeesAndFunding whereUkFullTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeesAndFunding whereUkPartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeesAndFunding whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FeesAndFunding whereYear($value)
 * @mixin \Eloquent
 */
class FeesAndFunding extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function feesAndFunding(): BelongsTo
    {
        return $this->belongsTo(FeesAndFunding::class, 'course_id');
    }
}

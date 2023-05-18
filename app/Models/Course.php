<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Course
 *
 * @property int $id
 * @property string $uuid
 * @property string $subject_area
 * @property string $course_name
 * @property string $course_details
 * @property string $level
 * @property string $entry_requirement
 * @property string $location
 * @property string $starting
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\CourseFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCourseDetails($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCourseName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereEntryRequirement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereStarting($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereSubjectArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUuid($value)
 * @mixin \Eloquent
 */
class Course extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'uuid','subject_area', 'course_name', 'course_details', 'level', 'entry_requirement','location', 'starting'
    ];
}

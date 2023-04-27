<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $subjectArea = ['Computing', 'Games Development', 'Biological Science'];
        $level = ['Undergraduate', 'Postgraduate'];
        return [
            'uuid' => Str::uuid(),
            'subject_area' => $subjectArea[array_rand($subjectArea)],
            'course_name' => $this->faker->name,
            'course_details' => $this->faker->sentence,
            'level' => $level[array_rand($level)],
            'entry_requirement' => $this->faker->sentence,
            'location' => 'Waterside',
            'starting' => 'September',
        ];
    }
}

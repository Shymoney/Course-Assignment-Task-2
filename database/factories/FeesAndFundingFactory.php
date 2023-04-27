<?php

declare(strict_types=1);

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FeesAndFunding>
 */
class FeesAndFundingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => 1,
            'year' => '2023/2024',
            'uk_full_time' => '£8000',
            'uk_part_time' => '£890(per course module)',
            'international_full_time' => '£16,500'
        ];
    }
}

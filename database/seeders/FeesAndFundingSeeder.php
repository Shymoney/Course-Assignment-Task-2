<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\FeesAndFunding;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeesAndFundingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FeesAndFunding::factory(5)->create();
    }
}

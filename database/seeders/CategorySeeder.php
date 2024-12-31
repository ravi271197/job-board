<?php

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $batchSize = 1000; // Insert in batches to avoid memory overload

        for ($i = 0; $i < 10000; $i++) { // 10,000 * 1,000 = 10,000,000 records
            Categories::factory()->count($batchSize)->create();
        }
    }
}

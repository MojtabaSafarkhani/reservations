<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::query()->insert([
            [
                'title' => 'هتل',
                'slug' => 'hotel',
            ],
            [
                'title' => 'هاستل',
                'slug' => 'hostel',
            ],
            [
                'title' => 'آپارتمان',
                'slug' => 'apartment',
            ],
            [
                'title' => 'کلبه',
                'slug' => 'cottage',
            ],
            [
                'title' => 'ويلا',
                'slug' => 'villa',
            ],

        ]);
    }
}

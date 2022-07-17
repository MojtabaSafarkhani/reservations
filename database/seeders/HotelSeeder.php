<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\City;
use App\Models\Host;
use App\Models\Hotel;
use Database\Factories\ImageFactory;
use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره یک',
            'phone' => '02133256710',
            'description' => 'هتل شماره یک یکی از بهترین هتل های ایران است که در سال 1379 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 128000,
            'capacity' => [1, 2, 3],
            'license' => "public/images/hosts/5GzMz3w6sxmZI1yccenFk5X6ZRa5727hUqzoak5T.jpg",


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره دو',
            'phone' => '02133256720',
            'description' => 'هتل شماره دو یکی از بهترین هتل های ایران است که در سال 1389 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 228000,
            'capacity' => [3,4,5],
            'license' => "public/images/hosts/5GzMz3w6sxmZI1yccenFk5X6ZRa5727hUqzoak5T.jpg",


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره سه',
            'phone' => '02133256710',
            'description' => 'هتل شماره سه یکی از بهترین هتل های ایران است که در سال 1360 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 125000,
            'capacity' => [1, 2, 3,4,5,6,7],
            'license' =>"public/images/hosts/5GzMz3w6sxmZI1yccenFk5X6ZRa5727hUqzoak5T.jpg",


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره چهار',
            'phone' => '02133256710',
            'description' => 'هتل شماره چهار یکی از بهترین هتل های ایران است که در سال 1380 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 122000,
            'capacity' => [5,6,7],
            'license' => "public/images/hosts/5GzMz3w6sxmZI1yccenFk5X6ZRa5727hUqzoak5T.jpg",


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره 5',
            'phone' => '02133256555',
            'description' => 'هتل شماره 5 یکی از بهترین هتل های ایران است که در سال 1355 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 102000,
            'capacity' => [4,5,6],
            'license' => "public/images/hosts/5GzMz3w6sxmZI1yccenFk5X6ZRa5727hUqzoak5T.jpg",


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره 6',
            'phone' => '0213325666',
            'description' => 'هتل شماره 6 یکی از بهترین هتل های ایران است که در سال 1360 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 102000,
            'capacity' => [1,2,3],
            'license' => "public/images/hosts/5GzMz3w6sxmZI1yccenFk5X6ZRa5727hUqzoak5T.jpg",


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره 7',
            'phone' => '02133256777',
            'description' => 'هتل شماره 6 یکی از بهترین هتل های ایران است که در سال 1360 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 102000,
            'capacity' => [1,2,3],
            'license' => "public/images/hosts/5GzMz3w6sxmZI1yccenFk5X6ZRa5727hUqzoak5T.jpg",


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره 8',
            'phone' => '02133256777',
            'description' => 'هتل شماره 8 یکی از بهترین هتل های ایران است که در سال 1308 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 108000,
            'capacity' => [1,2,3,4,5],
            'license' => "public/images/hosts/5GzMz3w6sxmZI1yccenFk5X6ZRa5727hUqzoak5T.jpg",


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره 9',
            'phone' => '02133256777',
            'description' => 'هتل شماره 9 یکی از بهترین هتل های ایران است که در سال 1309 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 108000,
            'capacity' => [1,2,3,4,5,6,7],
            'license' => "public/images/hosts/5GzMz3w6sxmZI1yccenFk5X6ZRa5727hUqzoak5T.jpg",


        ]);
        Hotel::query()->create([
            'host_id' => Host::query()->inRandomOrder()->value('id'),
            'city_id' => City::query()->inRandomOrder()->value('id'),
            'category_id' => Category::query()->inRandomOrder()->value('id'),
            'name' => 'هتل شماره 10',
            'phone' => '02133256101',
            'description' => 'هتل شماره 10 یکی از بهترین هتل های ایران است که در سال 1310 ساخته شده است.',
            'address' => 'ايران ',
            'is_published' => 'ok',
            'cost' => 108000,
            'capacity' => [1,2,3,4,5,6,7],
            'license' => "public/images/hosts/5GzMz3w6sxmZI1yccenFk5X6ZRa5727hUqzoak5T.jpg",


        ]);
    }
}

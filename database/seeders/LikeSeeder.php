<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\User;
use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();

        foreach ($users as $user) {

            $randomInt = random_int(1, 7);

            $hotelIds = Hotel::all()->random($randomInt)->pluck('id');

            $user->likes()->attach($hotelIds);

        }
    }
}

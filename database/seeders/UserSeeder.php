<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()->insert([
            'role_id' => 2,
            'name' => 'ميزبان شماره يک',
            'email' => 'host@gmail.com',
            'password' => Hash::make(123456789),
        ]);
        User::query()->insert([
            'role_id' => 2,
            'name' => 'ميزبان شماره دو',
            'email' => 'host2@gmail.com',
            'password' => Hash::make(123456789),
        ]);
        User::query()->insert([
            'role_id' => 2,
            'name' => 'ميزبان شماره سه',
            'email' => 'host3@gmail.com',
            'password' => Hash::make(123456789),
        ]);

        User::query()->insert([
            'role_id' => 3,
            'name' => 'کاربر شماره يک',
            'email' => 'user@gmail.com',
            'password' => Hash::make(123456789),
        ]);
        User::query()->insert([
            'role_id' => 3,
            'name' => 'کاربر شماره دو',
            'email' => 'user2@gmail.com',
            'password' => Hash::make(123456789),
        ]);
    }
}

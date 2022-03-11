<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'address' => 'H4N0I',
                'phone' => '111-111-111',
                'password' => bcrypt('admin123'),
                'is_admin' => 1,
                'created_at' => '2022-03-07 21:25:42',
                'updated_at' => '2022-03-07 21:25:42',
            ],

            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'address' => 'Hanoi',
                'phone' => '000-000-000',
                'password' => bcrypt('user123'),
                'is_admin' => 0,
                'created_at' => '2022-03-07 21:25:42',
                'updated_at' => '2022-03-07 21:25:42',
            ],

        ]);
    }
}

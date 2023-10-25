<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'admin',
                'name' => 'Electro',
                'password' => '12345',
                'created_at' => '2018-08-28',
                'updated_at' => '2018-08-28',
            ]
            // [
            //     'name' => 'Admin',
            //     'email' => 'admin@gmail.com',
            //     'role' => 'admin',
            //     'password' => bcrypt('123456'),
            //     'telepon' => '0000000',
            //     'alamat' => 'admin',
            // ],
            // [
            //     'name' => 'user',
            //     'email' => 'user@gmail.com',
            //     'role' => 'user',
            //     'password' => bcrypt('123456'),
            //     'telepon' => '081332496225',
            //     'alamat' => 'sidoarjo',
            // ],
        ];

        foreach ($user as $key => $value) {
            admin::create($value);
        }
    }
}

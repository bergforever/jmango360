<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->delete();

        \DB::table('users')->insert([
            0 => [
                'id' => 1,
                'name' => 'Faizan Ali',
                'email' => 'admin@gmail.com',
                'email_verified_at' => null,
                'password' => '$2y$10$nb1uhU9S67fyQePvP/6cuuJ7GRL.I.Iuu4pSipw6ipWafxkX4dxae',
                'remember_token' => null,
                'role' => 'admin',
                'image' => 'du_black.png',
                'created_at' => '2022-09-01 06:46:38',
                'updated_at' => '2022-09-19 08:31:03',
            ],
        ]);
    }
}

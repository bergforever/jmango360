<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('settings')->delete();

        \DB::table('settings')->insert([
            0 => [
                'id' => 6,
                'app_name' => 'A2Z Tech',
                'facebook_link' => null,
                'linkedin_link' => null,
                'instagram_link' => null,
                'twitter_link' => null,
                'created_at' => '2022-09-21 07:06:04',
                'updated_at' => '2022-09-21 07:07:41',
            ],
        ]);
    }
}

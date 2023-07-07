<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();

        \DB::table('categories')->insert([
            0 => [
                'id' => 4,
                'name' => 'Application',
                'created_at' => '2022-09-06 06:01:39',
                'updated_at' => '2022-09-06 06:01:39',
            ],
            1 => [
                'id' => 5,
                'name' => 'WebSite',
                'created_at' => '2022-09-06 06:01:51',
                'updated_at' => '2022-09-06 06:01:51',
            ],
            2 => [
                'id' => 6,
                'name' => 'Digital Markiting',
                'created_at' => '2022-09-06 06:02:06',
                'updated_at' => '2022-09-06 06:02:06',
            ],
        ]);
    }
}

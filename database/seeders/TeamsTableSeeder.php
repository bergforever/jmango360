<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('teams')->delete();

        \DB::table('teams')->insert([
            0 => [
                'id' => 26,
                'name' => 'Faizan Ali',
                'post' => 'Website Developer',
                'member_image' => 'image-02-631983c215bf0.png',
                'services' => 'Laravel php, Html, css, tailwindcss, JavaScript',
                'facebook_link' => 'https://www.facebook.com/',
                'instagram_link' => 'https://instagram.com/',
                'linkedin_link' => 'https://www.linkedin.com/in/ali-yousaf-kamboh-6a01b7126/',
                'twitter_link' => 'https://twitter.com/',
                'created_at' => '2022-09-08 05:55:14',
                'updated_at' => '2022-09-08 06:56:02',
            ],
            1 => [
                'id' => 27,
                'name' => 'Ali Hassan',
                'post' => 'Designer',
                'member_image' => 'image-01-63246f7693c84.png',
                'services' => 'PS Photo Shop',
                'facebook_link' => 'https://www.facebook.com/',
                'instagram_link' => 'https://instagram.com/',
                'linkedin_link' => 'https://www.linkedin.com/in/ali-yousaf-kamboh-6a01b7126/',
                'twitter_link' => 'https://twitter.com/',
                'created_at' => '2022-09-08 05:55:59',
                'updated_at' => '2022-09-16 12:43:34',
            ],
            2 => [
                'id' => 28,
                'name' => 'yasir',
                'post' => 'Application Developer',
                'member_image' => 'image-04-631984163ac40.png',
                'services' => 'Flutter',
                'facebook_link' => 'https://www.instagram.com/',
                'instagram_link' => 'https://instagram.com/',
                'linkedin_link' => 'https://www.linkedin.com/in/ali-yousaf-kamboh-6a01b7126/',
                'twitter_link' => 'https://twitter.com/',
                'created_at' => '2022-09-08 05:56:38',
                'updated_at' => '2022-09-08 06:54:11',
            ],
            3 => [
                'id' => 29,
                'name' => 'Rizwan Ali',
                'post' => 'Developer',
                'member_image' => 'image-04-631984305a5f4.png',
                'services' => 'Laravel php, Html, css, tailwindcss, JavaScript',
                'facebook_link' => 'https://web.facebook.com/',
                'instagram_link' => 'https://www.instagram.com/',
                'linkedin_link' => 'https://www.linkedin.com/in/ali-yousaf-kamboh-6a01b7126/',
                'twitter_link' => 'https://twitter.com/',
                'created_at' => '2022-09-08 05:57:04',
                'updated_at' => '2022-09-08 05:57:04',
            ],
        ]);
    }
}

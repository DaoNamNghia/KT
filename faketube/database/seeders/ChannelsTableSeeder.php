<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ChannelsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) { // Sinh 10 bản ghi minh họa
            DB::table('channels')->insert([
                'channelname' => $faker->company,
                'subscriberscount' => $faker->numberBetween(1000, 1000000),
                'URL' => $faker->url,
            ]);
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{

    public function run()
    {
        $faker = Faker::create();


        for ($i = 1; $i <= 50; $i++){
            $randomCat = rand(1, 10);
            $randomId = rand(1, 999);
            $randomUrl = "https://picsum.photos/id/".$randomId."/300/300";

            DB::table('products')->insert([
                'productName' => $faker->word,
                'productDetail' => $faker->text($maxNbChars = 200),
                'productImageUrl' => $randomUrl,
                'productPrice' => $faker->randomNumber(2),
                'productCategory' => $randomCat,
            ]);
        }


    }
}

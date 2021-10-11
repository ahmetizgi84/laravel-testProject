<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $categories = ["Mutfak", "Mobilya", "Elektronik", "Beyaz Eşya", "Giyim", "Spor", "Yaşam", "Hırdavat", "Otomobil", "Kozmetik"];

        foreach ($categories as $category){
            DB::table('categories')->insert([
                'categoryName' => $category,
                'status' => 0,
            ]);
        }
    }
}

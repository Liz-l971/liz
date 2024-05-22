<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for($i = 0; $i < 20; $i++){
            Product::create([
                'title' => $faker->title,
                'description' =>$faker->paragraph,
                'price' => $faker->randomNumber(2),
                'img' => $faker ->boolean(50)
            ]);
        }

    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i=0; $i < 30; $i++) {
            Product::create([
                'titre' => $faker->sentence(4),
                'note' => $faker->numberBetween(15, 300) * 100,
                'description' => $faker->text,
                'prix' => $faker->numberBetween(15, 300) * 100,
                'image' => 'https://via.placeholder.com/200x250'
            ]);
        }    
    }
}

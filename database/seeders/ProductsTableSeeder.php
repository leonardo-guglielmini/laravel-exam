<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for ($i = 0; $i < 15; $i++) {

            $newProduct = new Product();
            $newProduct->name = $faker->name;
            $newProduct->price = $faker->randomFloat(2, 1, 100);
            $newProduct->description = $faker->text(200);
            $newProduct->stock = $faker->numberBetween(1, 100);
            $newProduct->company_id = $faker->numberBetween(1, 5);
            $newProduct->save();
        }
    }
}

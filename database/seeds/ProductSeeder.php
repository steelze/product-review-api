<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 100)->create()->each(function ($product) {
            $product->reviews()->createMany(factory(App\Review::class, 5)->make()->toArray());
        });
    }
}

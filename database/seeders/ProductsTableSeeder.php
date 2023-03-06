<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
        Product::create([
            'name' => 'Guinea Corn',
            'description' => 'African best grains',
            'slug' => Str::slug('Guinea Corn'),
            'business_id' => 1,
            'price' => 10000,
            'status' => 1,

        ]);
    }
}

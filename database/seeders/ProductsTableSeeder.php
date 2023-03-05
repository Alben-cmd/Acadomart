<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

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
            'business_id' => 1,
            'price' => 10000,
            'status' => 1,

        ]);
    }
}

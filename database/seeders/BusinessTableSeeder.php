<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Business;
use Illuminate\Support\Str;

class BusinessTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Business::create([
            'name' => 'AgroMart',
            'slug' => Str::slug('AgroMart'),
            'address' => 'Enactus Federal University of Technology, Minna',
            'link' => 'https://agromart.com.ng',
            'status' => 1
        ]);
    }
}

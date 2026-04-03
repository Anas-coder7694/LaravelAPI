<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   
        // 🔹 Create 50 products
        Product::factory()->count(500)->create();
        // Product::insert([
        //     [
        //     'name'=>'product1',
        //     'description'=>"asdfghjkmnbv",
        //     'category'=>'category1',
        //     'stock'=>200,
        //     'price'=>25.6

        // ],[
        //     'name'=>'product2',
        //     'description'=>"asdfghjkymnbv",
        //     'category'=>'category2',
        //     'stock'=>200,
        //     'price'=>30.1

        // ]
        // ]
        // );
    }
}

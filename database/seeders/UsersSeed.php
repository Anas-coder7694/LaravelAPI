<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            // User::create([
                
            //         'name'=>"hasnain",
            //         "email"=>"hasnain@gmail.com",
            //         "password"=>bcrypt('22434')
            //     ]
                
            // );
            // 🔹 Create 50 products
             User::factory()->count(500)->create();
             User::insert([
                
                    'name'=>"hasnain",
                    "email"=>"hasnain@gmail.com",
                    "password"=>bcrypt('22434')
                ]
                
            );


    }
}

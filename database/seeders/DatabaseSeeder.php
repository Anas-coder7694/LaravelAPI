<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            
            UsersSeed::class,
            CategorySeeder::class,
            ProductSeeder::class,
            
            AutherSeeder::class,
            ArticleSeeder::class,
        ]);
    }
}

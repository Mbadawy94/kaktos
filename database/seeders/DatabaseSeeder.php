<?php

namespace Database\Seeders;

use App\Models\blog;
use App\Models\category;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(10)->create();
        Category::factory(3)->hasProducts(20)
            ->has(blog::factory()->count(10)->hasTags(3))
            ->create();
//        Category::factory(10)->create();
//        Blog::factory()->hasComments(5)->hasTags(3)->create();
    }
}

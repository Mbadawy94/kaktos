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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@kaktos.app',
            'password' => bcrypt(12345678)
        ]);

        Category::create([
           'name' => 'Hair',
           'description' => 'description'
        ]);
        Category::create([
           'name' => 'Face',
           'description' => 'description'
        ]);
        Category::create([
           'name' => 'Skin',
           'description' => 'description'
        ]);

        if (config('app.env') == 'production') {
            return;
        }

        Category::factory()->hasProducts(20)
            ->has(blog::factory()->count(20)->hasTags(3))
            ->create();
//        Category::factory(10)->create();
//        Blog::factory()->hasComments(5)->hasTags(3)->create();
    }
}

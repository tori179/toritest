<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $laravelCategory = Category::where('name', 'Laravel')->first();
        $phpCategory = Category::where('name', 'PHP')->first();

        if (!$laravelCategory || !$phpCategory) {
            dd("Category không tồn tại. Hãy chạy `php artisan db:seed --class=CategorySeeder` trước.");
        }
        Post::create([
            'title' => 'Introduction to Laravel',
            'content' => 'Laravel is a PHP framework...',
            'category_id' => $laravelCategory->id
        ]);

        Post::create([
            'title' => 'PHP Best Practices',
            'content' => 'Writing clean and efficient PHP code...',
            'category_id' => $phpCategory->id
        ]);
    }
}

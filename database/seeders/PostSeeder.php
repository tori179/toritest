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
        $category = Category::firstOrCreate(['name' => 'Công nghệ']);

        Post::create([
            'title' => 'Bài viết đầu tiên',
            'content' => 'Đây là nội dung bài viết đầu tiên.',
            'category_id' => $category->id
        ]);
    }
}

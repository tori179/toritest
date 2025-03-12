<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Http\Resources\PostCollection;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // API lấy danh sách bài viết
    public function index()
    {
        $posts = Post::with('category')->paginate(10);
        return new PostCollection($posts);
    }

    // API lấy chi tiết bài viết
    public function show($id)
    {
        $post = Post::with('category')->findOrFail($id);
        return new PostResource($post);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\StaticPage;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $posts = Post::get();
        $pages = StaticPage::get();

        return view('home.home', compact('categories', 'posts', 'pages'));
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();

        return view('home.post', compact('post'));
    }

    public function page($slug)
    {
        $page = StaticPage::where('slug', $slug)->firstOrFail();

        $page->update(['seen' => $page->seen + 1]);
        $page->save();

        return view('home.page', compact('page'));
    }

    public function category($category_slug)
    {
        $category = Category::where('slug', $category_slug)->first();
        $posts = app(PostRepository::class)->getAllWithCategory($category_slug, 5);
        // $posts = Post::where('category_id', $category->id)->get();
        return view('front.news', compact('posts', 'category'));
        // return view('home.category', compact('posts'));
    }
    public function category_post($category_slug, $slug)
    {
        $category = Category::where('slug', $category_slug)->firstOrFail();
        $post = Post::where('slug', $slug)->where('category_id', $category->id)->firstOrFail();

        $post->update(['seen' => $post->seen + 1]);
        $post->save();
        return view('home.post', compact('post'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\StaticPage;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

        return view('home.page', compact('page'));
    }

    public function category($category_slug)
    {
        $posts = app(PostRepository::class)->getAllWithCategory($category_slug, 5);
        
        return view('front.news', compact('posts'));
        // return view('home.category', compact('posts'));
    }
    public function category_post($category_slug, $slug)
    {
        // $posts = app(PostRepository::class)->getAllWithCategory($category_slug, 5);
        // dd($posts);
        $category = Category::where('slug', $category_slug)->firstOrFail();
        $post = Post::where('slug', $slug)->where('category_id', $category->id)->firstOrFail();

        $post->update(['seen' => $post->seen + 1]);
        $post->save();
        return view('home.post', compact('post'));
    }
}

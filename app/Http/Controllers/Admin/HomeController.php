<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Models\StaticPage;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $posts_count = Post::all()->count();
        $categories_count = Category::all()->count();
        $users_count = User::all()->count();
        $pages_count = StaticPage::all()->count();

        return view('admin.home.index',
            compact('posts_count', 'categories_count', 'users_count', 'pages_count')
        );
    }

    public function profile()
    {
        return view('admin.home.profile');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
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
        $contact_count = Contact::where('seen', 0)->count();
        $last_posts = Post::orderBy('id', 'desc')->limit(5)->get();
        $last_pages = StaticPage::orderBy('id', 'desc')->limit(5)->get();

        return view('admin.home.index',
            compact(
                'posts_count',
                'categories_count',
                'users_count',
                'contact_count',
                'last_posts',
                'last_pages',
            )
        );
    }

    public function profile()
    {
        return view('admin.home.profile');
    }
}

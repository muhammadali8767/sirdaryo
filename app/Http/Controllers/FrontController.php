<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContacCreateRequest;
use App\Models\Contact;
use App\Models\Media;
use App\Models\Post;
use App\Models\StaticPage;
use App\Repositories\PostRepository;

class FrontController extends Controller
{
    public function index()
    {
        $about = StaticPage::where('slug', 'biz-haqimizda')->first();
        $posts = Post::orderBy('created_at', 'DESC')->with('category')->paginate(10);

        return view('front.index', compact('about','posts'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function news()
    {
        $posts = Post::orderBy('created_at', 'DESC')->with('category')->paginate(9);

        return view('front.news', compact('posts'));
    }

    public function multimedia()
    {
        $photos = Media::where('type', 'photo')->limit(9)->get();
        $videos = Media::where('type', 'video')->limit(9)->get();

        return view('front.multimedia', compact('photos', 'videos'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function post_contact(ContacCreateRequest $request)
    {
        // dd($request->all());
        $contact = Contact::create($request->except('_token'));

        if ($contact->save()) {
            return redirect()->back()->withSuccess('Ваша заявка успешно сохранена!');
        } else {
            return redirect()->back()->withErrors('Ваша заявка не сохранена!');
        }
    }

    public function blog()
    {
        // $posts = Post::latest()->paginate(5);
        $posts = app(PostRepository::class)->getAllWithPaginate(5);
        return view('front.blog', compact('posts'));
    }

    public function singleBlog($id)
    {
        $post = app(PostRepository::class)->getEdit($id);
        return view('front.singleBlog', compact('post'));
    }

    public function services()
    {
        return view('front.services');
    }
}

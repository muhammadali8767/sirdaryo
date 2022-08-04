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
        $lastPost = Post::orderBy('created_at', 'DESC')->with('category')->first();
        $posts = Post::orderBy('created_at', 'DESC')->where('id', '!=', $lastPost->id)->with('category')->limit(4)->get();

        return view('front.index', compact('about', 'lastPost', 'posts'));
    }

    public function about()
    {
        return view('front.about');
    }

    public function territory()
    {
        return view('front.territory');
    }

    public function eiz_vazifasi()
    {
        return view('front.eiz_vazifasi');
    }

    public function sirdaryo_eiz_mk()
    {
        return view('front.sirdaryo_eiz_mk');
    }

    public function bussiness()
    {
        return view('front.bussiness');
    }

    public function why()
    {
        return view('front.why');
    }

    public function privilege()
    {
        return view('front.privilege');
    }

    public function activity_types()
    {
        return view('front.activity_types');
    }

    public function project()
    {
        return view('front.project');
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
        $contact = Contact::create($request->except('_token'));

        if ($contact->save()) {
            return redirect()->back()->withSuccess('Ваша заявка успешно сохранена!');
        } else {
            return redirect()->back()->withErrors('Ваша заявка не сохранена!');
        }
    }

    // public function project()
    // {
    //     return view('front.project');
    // }

    // public function elements()
    // {
    //     return view('front.elements');
    // }

    // public function projectDetails()
    // {
    //     return view('front.projectDetails');
    // }

    public function blog()
    {
        // $posts = Post::latest()->paginate(5);
        $posts = app(PostRepository::class)->getAllWithPaginate(5);
        // dd($posts);
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

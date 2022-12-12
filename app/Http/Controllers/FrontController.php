<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContacCreateRequest;
use App\Http\Requests\EventCreateRequest;
use App\Models\Contact;
use App\Models\Deputat;
use App\Models\Director;
use App\Models\Event;
use App\Models\HeadOfSecretariat;
use App\Models\Media;
use App\Models\OpenData;
use App\Models\Post;
use App\Models\Reception;
use App\Models\Senator;
use App\Models\StaticPage;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $carousels = Post::where('is_carousel', 1)->orderBy('created_at', 'DESC')->with('category')->limit(3)->get();
        $latestPosts = Post::orderBy('created_at', 'DESC')->with('category')->limit(3)->get();
        $photos = Media::where('type', 'photo')->limit(9)->get();
        $videos = Media::where('type', 'video')->limit(9)->get();
        $contacts = Contact::get();
        $statistics = [
            'all' => $contacts->count(),
            'seen' => $contacts->where('seen', 1)->count(),
            'proces' => $contacts->where('seen', 2)->count(),
            'completed' => $contacts->where('seen', 3)->count(),
        ];

        dd($statistics);
        return view('front.index', compact('latestPosts', 'carousels', 'photos', 'videos', 'statistics'));
    }

    public function news()
    {
        $posts = Post::orderBy('created_at', 'DESC')->with('category')->paginate(9);

        return view('front.news', compact('posts'));
    }

    public function senators()
    {
        $senators = Senator::get();
        $date = $senators?->first()?->created_at;
        return view('front.senators', compact('senators', 'date'));
    }

    public function directors()
    {
        $directors = Director::get();
        $date = $directors?->first()?->created_at;
        return view('front.directors', compact('directors', 'date'));
    }

    public function deputats()
    {
        $deputats = Deputat::get();
        $date = $deputats?->first()?->created_at;
        return view('front.deputats', compact('deputats', 'date'));
    }

    public function receptions()
    {
        $receptions = Reception::get();
        $date = $receptions?->first()?->created_at;
        return view('front.receptions', compact('receptions', 'date'));
    }

    public function kotibs()
    {
        $kotibs = HeadOfSecretariat::get();
        $date = $kotibs?->first()?->created_at;
        return view('front.kotibs', compact('kotibs', 'date'));
    }

    public function openDatas()
    {
        $openDatas = OpenData::get();
        return view('front.openDatas', compact('openDatas'));
    }

    public function decrees()
    {
        $decrees = OpenData::get();
        return view('front.decrees', compact('decrees'));
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

    public function qabul()
    {
        return view('front.qabul');
    }

    public function post_contact(Request $request)
    {
        $file = $request->file('file');
        $filePath = '';
        $destinationPath = 'uploads';
        if ($file && $savedFile = $file->move($destinationPath,time().'-'.$file->getClientOriginalName())) {
            $filePath = $destinationPath .'/'. $savedFile->getFilename();
        }
        $contact = Contact::create([
            'familya' => $request->familya,
            'type' => $request->type,
            'ism' => $request->ism,
            'otasi' => $request->otasi,
            'jinsi' => $request->jinsi,
            'manzil' => $request->manzil,
            'telefon' => $request->telefon,
            'email' => $request->email,
            'text' => $request->text,
            'file' => $filePath
        ]);

        if ($contact->save()) {
            return redirect()->back()->withSuccess(__('front.ariza-success', ['ariza' => $contact->id]));
        } else {
            return redirect()->back()->withErrors(__('front.ariza-error'));
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

    public function getEvents()
    {
        $month = request()->month ? request()->month : date('m');
        $year = request()->year ? request()->year : date('Y');
        $events = Post::where('id', '>', 0)
            ->whereMonth('created_at', $month)
            ->whereYear('created_at', $year)
            ->select(
                'id',
                'title_'. app()->getLocale() . ' as post_title' ,
                'created_at as date',
                'slug as link'
            )->get();
        return response()->json($events);
    }
}

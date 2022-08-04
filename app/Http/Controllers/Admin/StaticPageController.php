<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StaticPageCreateRequest;
use App\Models\StaticPage;
use Illuminate\Http\Request;
use App\Models\User;

class StaticPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = StaticPage::orderBy('created_at', 'DESC')->paginate(10);

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaticPageCreateRequest $request)
    {
        $pageArray = [
            "title_uz" => "Dicta illum nobis aliquid aperiam veritatis et. Sed excepturi porro nulla unde eligendi alias est. Mollitia aperiam laborum ipsam officia expedita nulla.",
            "title_ru" => "Et sint quos aliquid voluptatem. Incidunt quasi distinctio non dolor quia omnis reprehenderit. Quas sunt odit nam quia iste modi est.",
            "title_en" => "Officiis laboriosam porro et quia facere optio. Omnis est incidunt sapiente libero rerum facere voluptatem. Sed expedita fugiat aut voluptatum minus neque maiores architecto. Rerum non perferendis voluptates quidem atque id.",
            "text_uz" => "Aut quas exercitationem et id. Harum soluta quam magnam sed. Perferendis voluptatem aspernatur sint natus et et.",
            "text_ru" => "Commodi libero dignissimos tempora dolor ut sit. Velit reiciendis harum et voluptas. Eaque sint illo repellat.",
            "text_en" => "Molestiae est eligendi velit sit fuga laborum. Reprehenderit est reprehenderit tempora sit. Qui veritatis sunt deserunt.",
            "slug" => "dicta-illum-nobis-aliquid-aperiam-veritatis-et-sed-excepturi-porro-nulla-unde-eligendi-alias-est-mollitia-aperiam-laborum-ipsam-officia-expedita-nulla",
            "type" => 1,
            "user_id" => 1,
            "sub_title_uz" => "Saepe numquam nihil totam. Ut quae est perferendis assumenda doloremque rerum. Esse tenetur omnis mollitia explicabo quisquam qui.",
            "sub_title_ru" => "Commodi consequatur qui eos. In sed dolores officiis officia ut tempore debitis dolorum. Quidem eveniet iure ea corporis ut doloribus. Autem cupiditate enim deserunt voluptas.",
            "sub_title_en" => "Minima esse voluptas ipsam et modi et. Voluptates asperiores cumque delectus aut optio omnis officia. Eos perspiciatis ,velit voluptatem.",
            "image" => "public/files\9f5ef93e771b11e6559f2e80231b6899.png"
        ];
        $page = StaticPage::create($request->except('_token'));

        if ($page->save()) {
            return redirect()->back()->withSuccess('Страница была успешно добавлена!');
        } else {
            return redirect()->back()->withErrors('Страница не была добавлена!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\StaticPage  $page
     * @return \Illuminate\Http\Response
     */
    public function show(StaticPage $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaticPage  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(StaticPage $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaticPage  $page
     * @return \Illuminate\Http\Response
     */
    public function update(StaticPageCreateRequest $request, StaticPage $page)
    {
        $page->update($request->except('_token'));

        if ($page->save()) {
            return redirect()->back()->withSuccess('Страница была успешно обновлена!');
        } else {
            return redirect()->back()->withErrors('Страница не была обновлена!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaticPage  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaticPage $page)
    {
        $page->delete();
        return redirect()->back()->withSuccess('Страница была успешно удалена!');
    }
}

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

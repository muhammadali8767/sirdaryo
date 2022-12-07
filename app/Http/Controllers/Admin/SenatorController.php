<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SenatorCreateRequest;
use App\Models\Senator;

class SenatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $senators = Senator::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.senator.index', compact('senators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.senator.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SenatorCreateRequest $request)
    {
        $senator = Senator::create($request->validated());

        if ($senator->save()) {
            return redirect()->back()->withSuccess('Член Сената была успешно добавлена!');
        } else {
            return redirect()->back()->withErrors('Член Сената не была добавлена!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Senator  $senator
     * @return \Illuminate\Http\Response
     */
    public function show(Senator $senator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Senator  $senator
     * @return \Illuminate\Http\Response
     */
    public function edit(Senator $senator)
    {
        return view('admin.senator.edit', compact('senator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Senator  $senator
     * @return \Illuminate\Http\Response
     */
    public function update(SenatorCreateRequest $request, Senator $senator)
    {
        $senator->update($request->validated());

        if ($senator->save()) {
            return redirect()->back()->withSuccess('Член Сената была успешно обновлена!');
        } else {
            return redirect()->back()->withErrors('Член Сената не была обновлена!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Senator  $senator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Senator $senator)
    {
        $senator->delete();

        return redirect()->back()->withSuccess('Член Сената была успешно удалена!');
    }
}

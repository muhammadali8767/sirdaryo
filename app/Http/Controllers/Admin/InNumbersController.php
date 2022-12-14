<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InNumbersCreateRequest;
use App\Models\InNumbers;

class InNumbersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inNumberss = InNumbers::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.inNumbers.index', compact('inNumberss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inNumbers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InNumbersCreateRequest $request)
    {
        $InNumbers = InNumbers::create($request->validated());

        if ($InNumbers->save()) {
            return redirect()->back()->withSuccess('В цифрах была успешно добавлена!');
        } else {
            return redirect()->back()->withErrors('В цифрах не была добавлена!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InNumbers  $InNumbers
     * @return \Illuminate\Http\Response
     */
    public function show(InNumbers $inNumberss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InNumbers  $inNumberss
     * @return \Illuminate\Http\Response
     */
    public function edit(InNumbers $inNumberss)
    {
        return view('admin.inNumbers.edit', compact('inNumberss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InNumbers  $InNumbers
     * @return \Illuminate\Http\Response
     */
    public function update(InNumbersCreateRequest $request, InNumbers $inNumberss)
    {
        $inNumberss->update($request->validated());

        if ($inNumberss->save()) {
            return redirect()->back()->withSuccess('В цифрах была успешно обновлена!');
        } else {
            return redirect()->back()->withErrors('В цифрах не была обновлена!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InNumbers  $inNumberss
     * @return \Illuminate\Http\Response
     */
    public function destroy(InNumbers $inNumberss)
    {
        $inNumberss->delete();

        return redirect()->back()->withSuccess('В цифрах была успешно удалена!');
    }
}

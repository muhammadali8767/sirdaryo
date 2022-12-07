<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HeadOfSecretariatCreateRequest;
use App\Models\HeadOfSecretariat;
use Illuminate\Http\Request;

class HeadOfSecretariatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headOfSecretariats = HeadOfSecretariat::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.headOfSecretariat.index', compact('headOfSecretariats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.headOfSecretariat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HeadOfSecretariatCreateRequest $request)
    {
        $headOfSecretariat = HeadOfSecretariat::create($request->validated());

        if ($headOfSecretariat->save()) {
            return redirect()->back()->withSuccess('Депутат была успешно добавлена!');
        } else {
            return redirect()->back()->withErrors('Депутат не была добавлена!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HeadOfSecretariat  $headOfSecretariat
     * @return \Illuminate\Http\Response
     */
    public function show(HeadOfSecretariat $headOfSecretariat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HeadOfSecretariat  $headOfSecretariat
     * @return \Illuminate\Http\Response
     */
    public function edit(HeadOfSecretariat $headOfSecretariat)
    {
        return view('admin.headOfSecretariat.edit', compact('headOfSecretariat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HeadOfSecretariat  $headOfSecretariat
     * @return \Illuminate\Http\Response
     */
    public function update(HeadOfSecretariatCreateRequest $request, HeadOfSecretariat $headOfSecretariat)
    {
        $headOfSecretariat->update($request->validated());

        if ($headOfSecretariat->save()) {
            return redirect()->back()->withSuccess('Депутат была успешно обновлена!');
        } else {
            return redirect()->back()->withErrors('Депутат не была обновлена!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HeadOfSecretariat  $headOfSecretariat
     * @return \Illuminate\Http\Response
     */
    public function destroy(HeadOfSecretariat $headOfSecretariat)
    {
        $headOfSecretariat->delete();

        return redirect()->back()->withSuccess('Депутат была успешно удалена!');
    }
}

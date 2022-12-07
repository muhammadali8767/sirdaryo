<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DeputatCreateRequest;
use App\Models\Deputat;
use Illuminate\Http\Request;

class DeputatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deputats = Deputat::orderBy('created_at', 'desc')->paginate(10);

        return view('admin.deputat.index', compact('deputats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.deputat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DeputatCreateRequest $request)
    {
        $deputat = Deputat::create($request->validated());

        if ($deputat->save()) {
            return redirect()->back()->withSuccess('Депутат была успешно добавлена!');
        } else {
            return redirect()->back()->withErrors('Депутат не была добавлена!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deputat  $deputat
     * @return \Illuminate\Http\Response
     */
    public function show(Deputat $deputat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deputat  $deputat
     * @return \Illuminate\Http\Response
     */
    public function edit(Deputat $deputat)
    {
        return view('admin.deputat.edit', compact('deputat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deputat  $deputat
     * @return \Illuminate\Http\Response
     */
    public function update(DeputatCreateRequest $request, Deputat $deputat)
    {
        $deputat->update($request->validated());

        if ($deputat->save()) {
            return redirect()->back()->withSuccess('Депутат была успешно обновлена!');
        } else {
            return redirect()->back()->withErrors('Депутат не была обновлена!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deputat  $deputat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deputat $deputat)
    {
        $deputat->delete();

        return redirect()->back()->withSuccess('Депутат была успешно удалена!');
    }
}

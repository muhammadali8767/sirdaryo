<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReceptionCreateRequest;
use App\Models\Reception;

class ReceptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $receptions = Reception::orderBy('created_at', 'desc')->paginate(10);

        // dd($receptions->toArray());
        return view('admin.reception.index', compact('receptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reception.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ReceptionCreateRequest $request)
    {
        $reception = Reception::create($request->validated());

        if ($reception->save()) {
            return redirect()->back()->withSuccess('Порядок приема граждан была успешно добавлена!');
        } else {
            return redirect()->back()->withErrors('Порядок приема граждан не была добавлена!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function show(Reception $reception)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function edit(Reception $reception)
    {
        return view('admin.reception.edit', compact('reception'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function update(ReceptionCreateRequest $request, Reception $reception)
    {
        $reception->update($request->validated());

        if ($reception->save()) {
            return redirect()->back()->withSuccess('Порядок приема граждан была успешно обновлена!');
        } else {
            return redirect()->back()->withErrors('Порядок приема граждан не была обновлена!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Reception  $reception
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reception $reception)
    {
        $reception->delete();

        return redirect()->back()->withSuccess('Порядок приема граждан была успешно удалена!');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OpenDataCreateRequest;
use App\Http\Requests\OpenDataUpdateRequest;
use App\Models\Decree;
use Illuminate\Http\Request;

class DecreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $decrees = Decree::paginate(10);

        return view('admin.decree.index', compact('decrees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.decree.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OpenDataCreateRequest $request)
    {
        $file = $request->file('file');
        $filePath = '';
        $destinationPath = 'uploads';
        if ($file && $savedFile = $file->move($destinationPath,time().'-'.$file->getClientOriginalName())) {
            $filePath = $destinationPath .'/'. $savedFile->getFilename();
        }
        $decree = Decree::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'file' => $filePath
        ]);

        if ($decree->save()) {
            return redirect()->back()->withSuccess('Рыешение мэра была успешно добавлена!');
        } else {
            return redirect()->back()->withErrors('Рыешение мэра не была добавлена!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function show(Decree $decree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function edit(Decree $decree)
    {
        return view('admin.decree.edit', compact('decree'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function update(OpenDataUpdateRequest $request, Decree $decree)
    {
        $file = $request->file('file');
        $filePath = '';
        $destinationPath = 'uploads';
        if ($file && $savedFile = $file->move($destinationPath,time().'-'.$file->getClientOriginalName())) {
            $filePath = $destinationPath .'/'. $savedFile->getFilename();
            $decree->file = $filePath;
        }
        $decree->title_uz = $request->title_uz;
        $decree->title_ru = $request->title_ru;
        $decree->title_en = $request->title_en;

        if ($decree->save()) {
            return redirect()->back()->withSuccess('Рыешение мэра была успешно обновлена!');
        } else {
            return redirect()->back()->withErrors('Рыешение мэра не была обновлена!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Decree $decree)
    {
        $decree->delete();

        return redirect()->back()->withSuccess('Рыешение мэра была успешно удалена!');
    }
}

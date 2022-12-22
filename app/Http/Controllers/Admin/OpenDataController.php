<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\OpenDataCreateRequest;
use App\Http\Requests\OpenDataUpdateRequest;
use App\Models\OpenData;
use Illuminate\Http\Request;

class OpenDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $opendatas = OpenData::paginate(10);

        return view('admin.openData.index', compact('opendatas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.openData.create');
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
        $opendata = OpenData::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'file' => $filePath
        ]);

        if ($opendata->save()) {
            return redirect()->back()->withSuccess('Открытая информация была успешно добавлена!');
        } else {
            return redirect()->back()->withErrors('Открытая информация не была добавлена!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OpenData  $opendata
     * @return \Illuminate\Http\Response
     */
    public function show(OpenData $opendata)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OpenData  $opendata
     * @return \Illuminate\Http\Response
     */
    public function edit(OpenData $opendata)
    {
        return view('admin.openData.edit', compact('opendata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OpenData  $opendata
     * @return \Illuminate\Http\Response
     */
    public function update(OpenDataUpdateRequest $request, OpenData $opendata)
    {
        $file = $request->file('file');
        $filePath = '';
        $destinationPath = 'uploads';
        if ($file && $savedFile = $file->move($destinationPath,time().'-'.$file->getClientOriginalName())) {
            $filePath = $destinationPath .'/'. $savedFile->getFilename();
            $opendata->file = $filePath;
        }
        $opendata->title_uz = $request->title_uz;
        $opendata->title_ru = $request->title_ru;
        $opendata->title_en = $request->title_en;

        if ($opendata->save()) {
            return redirect()->back()->withSuccess('Открытая информация была успешно обновлена!');
        } else {
            return redirect()->back()->withErrors('Открытая информация не была обновлена!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OpenData  $opendata
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpenData $opendata)
    {
        $opendata->delete();

        return redirect()->back()->withSuccess('Открытая информация была успешно удалена!');
    }
}

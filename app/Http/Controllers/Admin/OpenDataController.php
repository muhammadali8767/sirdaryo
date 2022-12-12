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
        $openDatas = OpenData::paginate(10);

        return view('admin.openData.index', compact('openDatas'));
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
        $openData = OpenData::create([
            'title_uz' => $request->title_uz,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'file' => $filePath
        ]);

        if ($openData->save()) {
            return redirect()->back()->withSuccess('Открытая информация была успешно добавлена!');
        } else {
            return redirect()->back()->withErrors('Открытая информация не была добавлена!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\OpenData  $openData
     * @return \Illuminate\Http\Response
     */
    public function show(OpenData $openData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OpenData  $openData
     * @return \Illuminate\Http\Response
     */
    public function edit(OpenData $openData)
    {
        return view('admin.openData.edit', compact('openData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OpenData  $openData
     * @return \Illuminate\Http\Response
     */
    public function update(OpenDataUpdateRequest $request, OpenData $openData)
    {
        $file = $request->file('file');
        $filePath = '';
        $destinationPath = 'uploads';
        if ($file && $savedFile = $file->move($destinationPath,time().'-'.$file->getClientOriginalName())) {
            $filePath = $destinationPath .'/'. $savedFile->getFilename();
            $openData->file = $filePath;
        }
        $openData->title_uz = $request->title_uz;
        $openData->title_ru = $request->title_ru;
        $openData->title_en = $request->title_en;

        if ($openData->save()) {
            return redirect()->back()->withSuccess('Открытая информация была успешно обновлена!');
        } else {
            return redirect()->back()->withErrors('Открытая информация не была обновлена!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OpenData  $openData
     * @return \Illuminate\Http\Response
     */
    public function destroy(OpenData $openData)
    {
        $openData->delete();

        return redirect()->back()->withSuccess('Открытая информация была успешно удалена!');
    }
}

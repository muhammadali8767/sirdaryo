<?php

namespace App\Http\Controllers\Admin;

use App\Models\Media;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MediaCreateRequest;

class MediaController extends Controller
{
    public function photoList()
    {
        $type = 'photo';
        $mediaList = Media::where('type', $type)->paginate(10);
        return view('admin.media.index', compact('mediaList'));
    }

    public function videoList()
    {
        $type = 'video';
        $mediaList = Media::where('type', $type)->paginate(10);
        return view('admin.media.index', compact('mediaList'));
    }

    public function index()
    {
        $mediaList = Media::paginate(10);
        return view('admin.media.index', compact('mediaList'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        return view('admin.media.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MediaCreateRequest $request)
    {
        $media = Media::create($request->except('_token'));

        if ($media->save()) {
            return redirect()->back()->withSuccess('Медиа была успешно добавлена!');
        } else {
            return redirect()->back()->withErrors('Медиа не была добавлена!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    // public function show(Media $media)
    // {
    //     dd(__METHOD__);
    //     return view('admin.media.show', compact('media'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $media = Media::find($id);

        return view('admin.media.edit', compact('media'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(MediaCreateRequest $request, Media $media)
    {
        $media->update($request->except('_token'));

        if ($media->save()) {
            return redirect()->back()->withSuccess('Медиа была успешно обновлена!');
        } else {
            return redirect()->back()->withErrors('Медиа не была обновлена!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        $media->delete();

        return redirect()->back()->withSuccess('Медиа была успешно удалена!');
    }
}

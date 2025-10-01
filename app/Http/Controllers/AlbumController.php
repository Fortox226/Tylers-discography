<?php

namespace App\Http\Controllers;

use App\Models\Album;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        return Album::with('songs')->get();
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'year' => 'nullable|integer',
            'cover' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $album = Album::create($data);
        return response()->json($album, 201);
    }


    public function show(Album $album)
    {
        return $album->load('songs');
    }


    public function update(Request $request, Album $album)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'year' => 'nullable|integer',
            'cover' => 'nullable|string',
            'description' => 'nullable|string',
        ]);


        $album->update($data);
        return response()->json($album);
    }


    public function destroy(Album $album)
    {
        $album->delete();
        return response()->json(null, 204);
    }
}
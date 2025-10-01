<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        return Song::with('album')->get();
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'duration' => 'nullable|string',
            'album_id' => 'required|exists:albums,id',
        ]);


        $song = Song::create($data);
        return response()->json($song, 201);
    }


    public function show(Song $song)
    {
        return $song->load('album');
    }


    public function update(Request $request, Song $song)
    {
        $data = $request->validate([
            'title' => 'required|string',
            'duration' => 'nullable|string',
            'album_id' => 'required|exists:albums,id',
        ]);


        $song->update($data);
        return response()->json($song);
    }


    public function destroy(Song $song)
    {
        $song->delete();
        return response()->json(null, 204);
    }
}
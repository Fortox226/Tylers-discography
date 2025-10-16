<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Song;
use App\Models\Album;

class SongSeeder extends Seeder
{
    public function run(): void
    {
        // Szukamy albumów po tytule, żeby przypisać piosenki
        $cmiygl = Album::where('title', 'Call Me If You Get Lost')->first();
        $chromakopia = Album::where('title', 'Chromakopia')->first();
        $dttg = Album::where('title', "Don't Tap the Glass")->first();

        // CALL ME IF YOU GET LOST
        Song::create([
            'title' => 'WUSYANAME',
            'duration' => '2:01',
            'album_id' => $cmiygl->id,
        ]);
        Song::create([
            'title' => 'CORSO',
            'duration' => '2:27',
            'album_id' => $cmiygl->id,
        ]);

        // CHROMAKOPIA
        Song::create([
            'title' => 'Sorry Not Sorry',
            'duration' => '3:44',
            'album_id' => $chromakopia->id,
        ]);
        Song::create([
            'title' => 'Garbage Truck',
            'duration' => '4:12',
            'album_id' => $chromakopia->id,
        ]);

        // DON'T TAP THE GLASS
        Song::create([
            'title' => 'Mirrorball',
            'duration' => '3:30',
            'album_id' => $dttg->id,
        ]);
        Song::create([
            'title' => 'Crystal Floor',
            'duration' => '3:15',
            'album_id' => $dttg->id,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;
use App\Models\Song;

class AlbumSeeder extends Seeder
{
    public function run()
    {
        Album::factory()->count(5)->create()->each(function (Album $album) {
            Song::factory()->count(rand(8,14))->create([
                'album_id' => $album->id,
            ]);
        });
    }
}
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
        $dttg = Album::where('title', "Wolf")->first();
        $dttg = Album::where('title', "Bastard")->first();
        $dttg = Album::where('title', "Goblin")->first();
        $dttg = Album::where('title', "Flower boy")->first();
        $dttg = Album::where('title', "Cherry bomb")->first();
        $dttg = Album::where('title', "Igor")->first();

        Song::create(['title' => 'SIR BAUDELAIRE (feat. DJ Drama)', 'duration' => '1:28', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'CORSO', 'duration' => '2:26', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'LEMONHEAD (feat. 42 Dugg)', 'duration' => '2:10', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'WUSYANAME (feat. YoungBoy …)', 'duration' => '2:01', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'LUMBERJACK', 'duration' => '2:18', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'HOT WIND BLOWS (feat. Lil Wayne)', 'duration' => '2:35', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'MASSA', 'duration' => '3:43', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'RUNITUP', 'duration' => '3:49', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'MANIFESTO', 'duration' => '2:55', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'SWEET / I THOUGHT YOU WANTED TO DANCE', 'duration' => '9:48', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'MOMMA TALK', 'duration' => '1:10', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'RISE!', 'duration' => '3:23', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'BLESSED', 'duration' => '0:57', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'JUGGERNAUT', 'duration' => '2:26', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'WILSHIRE', 'duration' => '8:35', 'album_id'=> $cmiygl->id]);
        Song::create(['title' => 'SAFARI', 'duration' => '2:57', 'album_id' => $cmiygl->id]);
        // Bonus tracks
        Song::create(['title' => 'EVERYTHING MUST GO', 'duration' => '—', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'STUNTMAN (feat. Vince Staples)', 'duration' => '—', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'WHAT A DAY', 'duration' => '—', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'WHARF TALK (feat. A$AP Rocky)', 'duration' => '—', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'DOGTOOTH', 'duration' => '2:41', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'HEAVEN TO ME', 'duration' => '—', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'BOYFRIEND, GIRLFRIEND (2020 DEMO)', 'duration' => '—', 'album_id' => $cmiygl->id]);
        Song::create(['title' => 'SORRY NOT SORRY', 'duration' => '—', 'album_id' => $cmiygl->id]);
    
    }
}

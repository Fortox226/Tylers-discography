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
        $wolf = Album::where('title', "Wolf")->first();
        $bastard = Album::where('title', "Bastard")->first();
        $goblin = Album::where('title', "Goblin")->first();
        $flowerBoy = Album::where('title', "Flower boy")->first();
        $cherrybomb = Album::where('title', "Cherry bomb")->first();
        $igor = Album::where('title', "Igor")->first();

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
    

        // Seed utworów - Flower Boy (14 tracków)
        Song::create(['title' => 'Foreword', 'duration' => '3:14', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => 'Where This Flower Blooms', 'duration' => '3:14', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => 'Sometimes...', 'duration' => '0:36', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => 'See You Again', 'duration' => '3:00', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => 'Who Dat Boy', 'duration' => '3:25', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => 'Pothole', 'duration' => '3:57', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => 'Garden Shed', 'duration' => '3:43', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => 'Boredom', 'duration' => '5:20', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => "I Ain't Got Time!", 'duration' => '3:26', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => '911 / Mr. Lonely', 'duration' => '4:15', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => "Droppin' Seeds", 'duration' => '1:00', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => 'November', 'duration' => '3:45', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => 'Glitter', 'duration' => '3:44', 'album_id' => $flowerBoy->id]);
        Song::create(['title' => 'Enjoy Right Now, Today', 'duration' => '3:55', 'album_id' => $flowerBoy->id]);


    
    // Seed utworów - CHROMAKOPIA (14 tracków)
        Song::create(['title' => 'St. Chroma (feat. Daniel Caesar)', 'duration' => '3:17', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'Rah Tah Tah', 'duration' => '2:45', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'Noid', 'duration' => '4:44', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'Darling, I (feat. Teezo Touchdown)', 'duration' => '4:13', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'Hey Jane', 'duration' => '4:00', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'I Killed You (feat. Childish Gambino)', 'duration' => '2:48', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'Judge Judy', 'duration' => '4:29', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'Sticky (feat. GloRilla, Sexyy Red, Lil Wayne)', 'duration' => '4:15', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'Take Your Mask Off (feat. Daniel Caesar & LaToiya Williams)', 'duration' => '4:13', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'Tomorrow', 'duration' => '3:02', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'Thought I Was Dead (feat. ScHoolboy Q)', 'duration' => '3:27', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'Like Him', 'duration' => '4:38', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'Balloon (feat. Doechii)', 'duration' => '2:34', 'album_id' => $chromakopia->id]);
        Song::create(['title' => 'I Hope You Find Your Way Home', 'duration' => '4:29', 'album_id' => $chromakopia->id]);





    }
}

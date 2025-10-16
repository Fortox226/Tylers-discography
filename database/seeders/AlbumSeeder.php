<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Album;
use App\Models\Song;

class AlbumSeeder extends Seeder
{
    public function run()
    {
        Album::create([
            'title' => 'Bastard',
            'year' => 2009,
            'cover' => 'bastard.png',
            'description' => 'Debiutancki projekt (często traktowany jako mixtape) Tylera, w którym eksploruje mroczne tematy, relacje rodzinne, bunt i konflikty wewnętrzne.'
        ]);
        Album::create([
            'title' => 'Goblin',
            'year' => 2011,
            'cover' => 'goblin.jpg',
            'description' => 'Drugi oficjalny album, wyróżniający się mrocznym klimatem i dialogami z fikcyjnym terapeutą Dr. TC.'
        ]);
        Album::create([
            'title' => 'Wolf',
            'year' => 2013,
            'cover' => 'wolf.jpg',
            'description' => 'Projekt koncepcyjny z postaciami Wolf, Sam i Salem, kontynuujący motywy psychologiczne i konflikty wewnętrzne.'
        ]);
        Album::create([
            'title' => 'Cherry Bomb',
            'year' => 2015,
            'cover' => 'Cherrybomb.png',
            'description' => 'Bardziej agresywny i eksperymentalny niż poprzednie, łączy elementy hip-hopu, jazzu, rocka i dźwiękowych eksperymentów.'
        ]);
        Album::create([
            'title' => 'Flower Boy',
            'year' => 2017,
            'cover' => 'flowerboy.jpg',
            'description' => 'Przełomowy album pod względem emocjonalnego podejścia — tematy samotności, tożsamości, miłości; dźwięki bardziej melodyjne i miękkie.'
        
        ]);
        Album::create([
            'title' => 'Igor',
            'year' => 2019,
            'cover' => 'igor.jpg',
            'description' => 'Bardzo koncepcyjny album, łączący hip-hop, soul, funk i R&B; opowieść o miłosnym trójkącie, intensywne emocje i zmiany nastrojów.'
        ]);

        Album::create([
            'title' => 'Call Me If You Get Lost',
            'year' => 2021,
            'cover' => 'cmiygl.jpg',
            'description' => 'Album podróżniczy, narrowany przez DJ Drama, z motywami luksusu, introspekcji, ryzyka i tożsamości.'
        ]);

        Album::create([
            'title' => 'Chromakopia',
            'year' => 2024,
            'cover' => 'chromakopia.jpg',
            'description' => 'Wydany po przerwie, łączy hip-hop, jazz i soul; konceptualnie opowiada historię poprzez perspektywę matki Tylera, refleksje nad przeszłością.'
        ]);

        Album::create([
            'title' => "Don't Tap the Glass",
            'year' => 2025,
            'cover' => 'dttg.png',
            'description' => 'Najnowszy album — bardziej energetyczny, z elementami house, funku i tańca; lżejszy ton, eksperyment z brzmieniem'
        ]);

    }
}



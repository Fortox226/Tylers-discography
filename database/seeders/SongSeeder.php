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

    // Seed utworów - Call Me If You Get Lost
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

    // Seed utworów - Don't tap the glass
        Song::create(['title' => 'Big Poe (feat. Sk8brd)', 'duration' => '3:02', 'album_id' => $dttg->id]);
        Song::create(['title' => 'Sugar On My Tongue', 'duration' => '2:33', 'album_id' => $dttg->id]);
        Song::create(['title' => 'Sucka Free', 'duration' => '2:41', 'album_id' => $dttg->id]);
        Song::create(['title' => 'Mommanem', 'duration' => '1:15', 'album_id' => $dttg->id]);
        Song::create(['title' => 'Stop Playing With Me', 'duration' => '2:13', 'album_id' => $dttg->id]);
        Song::create(['title' => 'Ring Ring Ring', 'duration' => '3:21', 'album_id' => $dttg->id]);
        Song::create(['title' => "Don't Tap The Glas / Tweakin'", 'duration' => '3:42', 'album_id' => $dttg->id]);
        Song::create(['title' => "Don't You Worry Baby (feat. Madison McFerrin", 'duration' => '2:58', 'album_id' => $dttg->id]);
        Song::create(['title' => "I'll Take Care of You (feat. Yebba)", 'duration' => '3:20', 'album_id' => $dttg->id]);
        Song::create(['title' => 'Tell Me What It Is', 'duration' => '3:22', 'album_id' => $dttg->id]);

    // Seed utworów - Wolf (18 tracków)
        Song::create(['title' => 'Wolf', 'duration' => '2:34', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Jamba', 'duration' => '3:31', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Cowboy', 'duration' => '4:00', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Awkward', 'duration' => '4:47', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Domo23', 'duration' => '2:43', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Answer', 'duration' => '3:51', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Slater', 'duration' => '3:46', 'album_id' => $wolf->id]);
        Song::create(['title' => '48', 'duration' => '4:08', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Colossus', 'duration' => '7:22', 'album_id' => $wolf->id]);
        Song::create(['title' => 'PartyIsntOver/Campfire/Bimmer', 'duration' => '6:21', 'album_id' => $wolf->id]);
        Song::create(['title' => 'IFHY', 'duration' => '5:21', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Pigs', 'duration' => '3:27', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Parking Lot', 'duration' => '3:56', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Rusty', 'duration' => '5:54', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Trashwang', 'duration' => '4:35', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Treehome95', 'duration' => '3:19', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Tamale', 'duration' => '2:53', 'album_id' => $wolf->id]);
        Song::create(['title' => 'Lone', 'duration' => '2:47', 'album_id' => $wolf->id]);

    // Seed utworów - Bastard (15 tracków)
        Song::create(['title' => 'Bastard', 'duration' => '6:09', 'album_id' => $bastard->id]);
        Song::create(['title' => 'Seven', 'duration' => '3:29', 'album_id' => $bastard->id]);
        Song::create(['title' => 'Odd Toddlers', 'duration' => '3:36', 'album_id' => $bastard->id]);
        Song::create(['title' => 'French!', 'duration' => '4:03', 'album_id' => $bastard->id]);
        Song::create(['title' => 'Blow', 'duration' => '2:55', 'album_id' => $bastard->id]);
        Song::create(['title' => 'Pigs Fly', 'duration' => '3:35', 'album_id' => $bastard->id]);
        Song::create(['title' => 'Parade', 'duration' => '2:23', 'album_id' => $bastard->id]);
        Song::create(['title' => 'Slow It Down', 'duration' => '3:08', 'album_id' => $bastard->id]);
        Song::create(['title' => 'AssMilk', 'duration' => '3:40', 'album_id' => $bastard->id]);
        Song::create(['title' => 'VCR / Wheels', 'duration' => '3:28', 'album_id' => $bastard->id]);
        Song::create(['title' => 'Session', 'duration' => '3:35', 'album_id' => $bastard->id]);
        Song::create(['title' => 'Sarah', 'duration' => '4:47', 'album_id' => $bastard->id]);
        Song::create(['title' => 'Jack and the Beanstalk', 'duration' => '3:51', 'album_id' => $bastard->id]);
        Song::create(['title' => 'Tina', 'duration' => '3:07', 'album_id' => $bastard->id]);
        Song::create(['title' => 'Inglorious', 'duration' => '4:05', 'album_id' => $bastard->id]);

        // Seed utworów - Goblin (18 tracków)
        Song::create(['title' => 'Goblin', 'duration' => '6:48', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Yonkers', 'duration' => '4:09', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Radicals', 'duration' => '7:18', 'album_id' => $goblin->id]);
        Song::create(['title' => 'She', 'duration' => '4:13', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Transylvania', 'duration' => '3:12', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Nightmare', 'duration' => '5:27', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Tron Cat', 'duration' => '4:13', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Her', 'duration' => '3:31', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Sandwitches', 'duration' => '4:31', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Fish', 'duration' => '6:19', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Analog', 'duration' => '2:54', 'album_id' => $goblin->id]);
        Song::create(['title' => 'B.S.D.', 'duration' => '3:30', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Window', 'duration' => '8:00', 'album_id' => $goblin->id]);
        Song::create(['title' => 'AU79', 'duration' => '3:40', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Golden', 'duration' => '5:42', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Burger', 'duration' => '3:49', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Untitled63', 'duration' => '3:46', 'album_id' => $goblin->id]);
        Song::create(['title' => 'Steak Sauce', 'duration' => '3:52', 'album_id' => $goblin->id]);
    
        // Seed utworów - Cherry Bomb (14 tracków)
        Song::create(['title' => 'DEATHCAMP', 'duration' => '3:45', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => 'BUFFALO', 'duration' => '3:52', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => 'PILOT', 'duration' => '3:20', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => 'RUN', 'duration' => '3:16', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => 'FIND YOUR WINGS', 'duration' => '2:59', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => 'CHERRY BOMB', 'duration' => '3:24', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => 'BLOW MY LOAD', 'duration' => '3:23', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => '2SEATER', 'duration' => '4:50', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => 'THE BROWN STAINS OF DARKEESE LATIFAH PART 6-12 (REMIX)', 'duration' => '5:38', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => 'FUCKING YOUNG / PERFECT', 'duration' => '5:14', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => 'SMUCKERS', 'duration' => '5:20', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => 'KEEP DA O\'S', 'duration' => '3:41', 'album_id' => $cherrybomb->id]);
        Song::create(['title' => 'OKAGA, CA', 'duration' => '5:05', 'album_id' => $cherrybomb->id]);
    
        // Seed utworów - IGOR (12 tracków)
        Song::create(['title' => 'IGOR\'S THEME', 'duration' => '3:20', 'album_id' => $igor->id]);
        Song::create(['title' => 'EARFQUAKE', 'duration' => '3:10', 'album_id' => $igor->id]);
        Song::create(['title' => 'I THINK', 'duration' => '3:32', 'album_id' => $igor->id]);
        Song::create(['title' => 'EXACTLY WHAT YOU RUN FROM YOU END UP CHASING', 'duration' => '0:14', 'album_id' => $igor->id]);
        Song::create(['title' => 'RUNNING OUT OF TIME', 'duration' => '2:57', 'album_id' => $igor->id]);
        Song::create(['title' => 'NEW MAGIC WAND', 'duration' => '3:15', 'album_id' => $igor->id]);
        Song::create(['title' => 'A BOY IS A GUN*', 'duration' => '3:32', 'album_id' => $igor->id]);
        Song::create(['title' => 'PUPPET', 'duration' => '2:59', 'album_id' => $igor->id]);
        Song::create(['title' => 'WHAT\'S GOOD', 'duration' => '3:25', 'album_id' => $igor->id]);
        Song::create(['title' => 'GONE, GONE / THANK YOU', 'duration' => '6:15', 'album_id' => $igor->id]);
        Song::create(['title' => 'I DON\'T LOVE YOU ANYMORE', 'duration' => '2:41', 'album_id' => $igor->id]);
        Song::create(['title' => 'ARE WE STILL FRIENDS?', 'duration' => '4:25', 'album_id' => $igor->id]);
    
    
    
    
    
    
    }
}

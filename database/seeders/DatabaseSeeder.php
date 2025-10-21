<?php

namespace Database\Seeders;

// use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AlbumSeeder::class,
            SongSeeder::class
        ]);

        User::create([
        'name' => 'Admin',
        'email' => 'admin@example.com',
        'password' => bcrypt('haslo123'),
    ]);
    }
}

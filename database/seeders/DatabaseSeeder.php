<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\AboutSeeder;
use Database\Seeders\GallerySeeder;
use Database\Seeders\ProgramSeeder;
use Illuminate\Support\Facades\Hash;
use Database\Seeders\TestimonialSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'AdminTest',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
        ]);

        $this->call([
            AboutSeeder::class,
            GallerySeeder::class,
            ProgramSeeder::class,
            TestimonialSeeder::class,
        ]);
    }
}

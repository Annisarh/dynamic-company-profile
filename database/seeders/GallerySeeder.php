<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataGallery = [
            [
                'imagegall' => 'gallery-1.png',
            ],
            [
                'imagegall' => 'gallery-2.png',
            ],
            [
                'imagegall' => 'gallery-3.png',
            ],
            [
                'imagegall' => 'gallery-4.png',
            ],
        ];
        foreach ($dataGallery as $val) {
            Gallery::create($val);
        }
    }
}

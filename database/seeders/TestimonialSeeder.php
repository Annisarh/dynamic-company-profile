<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataTesti = [
            [
                'nametesti' => 'Emily Williams',
                'profile' => 'user-1.png',
                'asal' => 'Edusity, USA',
                'testi' => 'Choosing to pursue my degree at Edusity was one of the best decisions Ive ever made. The supportive community, state-of-the-art facilities, and commitment to academic excellence have truly exceeded my expectations.'
            ],
            [
                'nametesti' => 'William Jackson',
                'profile' => 'user-2.png',
                'asal' => 'Edusity, USA',
                'testi' => 'Choosing to pursue my degree at Edusity was one of the best decisions Ive ever made. The supportive community, state-of-the-art facilities, and commitment to academic excellence have truly exceeded my expectations.'
            ],
            [
                'nametesti' => 'Emily Williams',
                'profile' => 'user-3.png',
                'asal' => 'Edusity, USA',
                'testi' => 'Choosing to pursue my degree at Edusity was one of the best decisions Ive ever made. The supportive community, state-of-the-art facilities, and commitment to academic excellence have truly exceeded my expectations.'
            ],
            [
                'nametesti' => 'William Jacksonv',
                'profile' => 'user-4.png',
                'asal' => 'Edusity, USA',
                'testi' => 'Choosing to pursue my degree at Edusity was one of the best decisions Ive ever made. The supportive community, state-of-the-art facilities, and commitment to academic excellence have truly exceeded my expectations.'
            ],
        ];

        foreach ($dataTesti as $val) {
            Testimoni::create($val);
        }
    }
}

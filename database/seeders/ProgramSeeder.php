<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dataProgram = [
            [
                'nameprogram' => 'Graduation Degree',
                'image' => 'program-1.png',
            ],
            [
                'nameprogram' => 'Masters Degree',
                'image' => 'program-2.png',
            ],
            [
                'nameprogram' => 'Post Graduation',
                'image' => 'program-1.png',
            ]
        ];
        foreach ($dataProgram as $key => $val) {
            Program::create($val);
        }
    }
}

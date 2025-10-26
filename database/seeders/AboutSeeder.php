<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Abouts')->insert([
            'nama' => 'Edusity',
            'logo' => 'logo.png',
            'tagline' => 'We Ensure better education for a better world',
            'about' => 'Our cutting-edge curriculum is designed to empower students with the knowledge, skills, and experiences needed to excel in the dynamic field of education',
            'email' => 'Contact@GreatStack.dev',
            'telp' => '+1 123-456-7890',
            'location' => '77 Massachusetts Ave, Cambridge MA 02139, United States',
            'intaname' => 'educity_univ',
            'more' => 'Embark on a transformative educational journey with our universitys comprehensive education programs. Our cutting-edge curriculum is designed to empower students with the knowledge, skills, and experiences needed to excel in the dynamic field of education. With a focus on innovation, hands-on learning, and personalized mentorship, our programs prepare aspiring educators to make a meaningful impact in classrooms, schools, and communities. Whether you aspire to become a teacher, administrator, counselor, or educational leader, our diverse range of programs offers the perfect pathway to achieve your goals and unlock your full potential in shaping the future of education.'
        ]);
    }
}

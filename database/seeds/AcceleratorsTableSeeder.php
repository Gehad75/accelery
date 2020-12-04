<?php

use Illuminate\Database\Seeder;
use App\Accelerator;

class AcceleratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Accelerator::create([
            'AcceleratorName' => 'Falak Startups',
            'slug' => 'Falak_Startups',
            'Logo' => 'falak.jpg',
            'MoreInfo' => 'Falak is a start-up accelerator designed to support and empower the next generation of Egyptian entrepreneurs and contribute to the development of the start-up ecosystem in Egypt. Our program offers funding, mentorship, training, and a wide variety of perks and benefits, with the aim of providing entrepreneurs the necessary tools, resources, and contacts to develop and expand their businesses.',
            'Category' => 'General, Technology',
            'Value' => 500000,    
            'Link' => 'http://falakstartups.com/',    
        ]);
    }
}

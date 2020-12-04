<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Stpcategory;

class StpcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Stpcategory::insert([
            ['name' => 'Art', 'slug' => 'Art', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Agriculture', 'slug' => 'Agriculture', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Automotive', 'slug' => 'Automotive', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Construction', 'slug' => 'Construction', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Consulting', 'slug' => 'Consulting', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Design', 'slug' => 'Design', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Digital Marketing', 'slug' => 'DigitalMarketing', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ecommerce', 'slug' => 'Ecommerce', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Education', 'slug' => 'Education', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Energy', 'slug' => 'Energy', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Entertainment', 'slug' => 'Entertainment', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Health Care', 'slug' => 'HealthCare', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sports', 'slug' => 'Sports', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Technology', 'slug' => 'Technology', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Travel', 'slug' => 'Travel', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}

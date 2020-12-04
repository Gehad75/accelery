<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Type;

class TypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();

        Type::insert([
            ['name' => 'Tool', 'slug' => 'tool', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Course', 'slug' => 'course', 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Article', 'slug' => 'article', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}

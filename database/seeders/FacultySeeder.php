<?php

namespace Database\Seeders;

use App\Models\Faculty;
use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faculties = [
            ['name' => 'IT', 'description' => 'Information technology'],
            ['name' => 'Business Administration', 'description' => 'Faculty of Business Administration'],
            ['name' => 'Theology', 'description' => 'Faculty of  Theology'],
            ['name' => 'Education', 'description' => 'Faculty of Education'],
            ['name' => 'Health Science/Nursing', 'description' => 'Faculty of Health Science/Nursing'],
        ];

        foreach ($faculties as $faculty) {
            Faculty::query()->create($faculty);
        }
    }
}

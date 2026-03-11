<?php

namespace Database\Seeders;

use App\Models\Course;

public function run()
{
    $this->call([
        UserSeeder::class,
        RoboticsKitSeeder::class
    ]);

    Course::factory()->count(100)->create();
}

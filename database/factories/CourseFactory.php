<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

public function definition()
{
    return [
        'title' => $this->faker->sentence(3),
        'cover' => $this->faker->imageUrl(),
        'content' => $this->faker->paragraph(),
        'robotics_kit_id' => $this->faker->numberBetween(1,3)
    ];
}
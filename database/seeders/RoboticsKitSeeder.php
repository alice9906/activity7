<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

public function run()
{
    DB::table('robotics_kits')->insert([
        ['name' => 'StarterKit'],
        ['name' => 'Educational Robotics Kit'],
        ['name' => 'Kit5']
    ]);
}
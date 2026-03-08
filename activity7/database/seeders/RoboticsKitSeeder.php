<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        // We assign these to course_id 1, 2, and 3 (which the factory will create)
        RoboticsKit::create([
            'model_name' => 'Customer Kit 1 Placeholder', 
            'serial_number' => 'SN-0001', 
            'course_id' => 1
        ]);

        RoboticsKit::create([
            'model_name' => 'Customer Kit 2 Placeholder', 
            'serial_number' => 'SN-0002', 
            'course_id' => 2
        ]);

        RoboticsKit::create([
            'model_name' => 'Customer Kit 3 Placeholder', 
            'serial_number' => 'SN-0003', 
            'course_id' => 3
        ]);
    }
}
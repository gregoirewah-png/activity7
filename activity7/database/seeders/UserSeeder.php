<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Administrator;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\Group;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Create Administrative User
        $admin = User::create([
            'name' => 'Admon',
            'email' => 'admon@robotics.com',
            'password' => Hash::make('Adm@2022')
        ]);
        Administrator::create(['user_id' => $admin->id]);

        // 2. Create Teacher User
        $teacher = User::create([
            'name' => 'Tecmilenio',
            'email' => 'tecmilenio@robotics.com',
            'password' => Hash::make('Adm@2022')
        ]);
        Teacher::create(['user_id' => $teacher->id]);

        // 3. Create a Group (Required for the Student)
        $group = Group::create(['name' => 'Robotics Cohort 1']);

        // 4. Create Student User
        $student = User::create([
            'name' => 'Student',
            'email' => 'student@robotics.com',
            'password' => Hash::make('Adm@2022')
        ]);
        Student::create([
            'user_id' => $student->id, 
            'group_id' => $group->id
        ]);
    }
}
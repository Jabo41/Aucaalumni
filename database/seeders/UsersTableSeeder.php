<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::query()
            ->create([
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'email' => 'admin@aucaalumni.com',
                'is_staff' => 1,
                'password' => Hash::make('password'),
                'phone_number' => '0780000000',
                'student_id' => 0
            ]);
        User::query()
            ->create([
                'first_name' => 'Jabo',
                'last_name' => 'Jean Josue',
                'email' => 'jabo@aucaalumni.com',
                'is_staff' => 0,
                'password' => Hash::make('password'),
                'phone_number' => '0780000001',
                'student_id' => '19227'
            ]);
    }
}

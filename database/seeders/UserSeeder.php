<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superAdmin = User::create([
            'username' => 'johndoe',
            'firstname' => 'John',
            'lastname' => 'Doe',
            'phone_number' => '07098776635',
            'designation' => 'Web Developer',
            'employee_id' => 'EMP210384',
            'email' => 'johndoe@gmail.com',
            'password' => Hash::make('password'),
        ]);
        
        $superAdmin->assignRole('Super Admin');
    }
}

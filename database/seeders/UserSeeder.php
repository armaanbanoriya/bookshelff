<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        $users = [
            [
                'name' => 'Armaan Banoriya',
                'email' => 'armaanbanoriya@gmail.com',
                'password' => Hash::make('abc123!@#'),
            ],
            [
                'name' => 'Sourav Rajput',
                'email' => 'souravrajput7975@gmail.com',
                'password' => Hash::make('abc123!@#'),
            ],
            [
                'name' => 'Nishant Sahu',
                'email' => 'nishantsahu360@gmail.com',
                'password' => Hash::make('abc123!@#'),
            ],
        ];

        foreach($users as $user){
            \App\Models\User::create($user);
        }


    }
}

<?php

use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $records=[
                    [
                        'name' => 'vikas',
                        'email' => '0902ee191011@rjit.ac.in',
                        'role' => 1,
                        'status' => 1,
                        'password' => bcrypt('abc123!@#')
                    ],
                    [
                        'name' => 'armaan banoriya',
                        'email' => 'armaanbanoriya@gmail.com',
                        'role' => 0,
                        'status' => 1,
                        'password' => bcrypt('abc123!@#')
                    ]
                ];
                foreach ($records as $record) {
                    User::create($record);
                }

    }


}

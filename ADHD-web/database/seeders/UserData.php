<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('123'),
                'level' => 1,
                'email' => 'admin@gmail.com'
            ],
            [
                'name' => 'User',
                'username' => 'user',
                'password' => bcrypt('123'),
                'level' => 2,
                'email' => 'user@gmail.com'
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //data dummy user
        $admins = [
            [
                'name' => 'admin',
                'email' => 'admin@seeder.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'kasir',
                'email' => 'kasir@seeder.com',
                'email_verified_at' => now(),
                'password' => bcrypt('password'),
            ]
        ];
        foreach ($admins as $admin) {
            User::create($admin);
        }
    }
}

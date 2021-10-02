<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@seeder.com',
                // 'level'=>'admin',
                'password' => bcrypt('12344321'),
            ],
            [
                'name' => 'kasir',
                'email' => 'kasir@seeder.com',
                // 'level'=>'kasir',
                'password' => bcrypt('43211234'),
            ]
        ];
        foreach ($users as $key => $value){
            User::create($value);
        }
    }
}

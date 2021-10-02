<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
<<<<<<< HEAD
        $this->call(AdminSeeder::class);
=======
        $this->call(UserSeeder::class);
>>>>>>> 70a5d6ea5410ea4e58b9b5c40bfbd17e36771484
    }
}

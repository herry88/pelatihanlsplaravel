<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //latihan seeder
        $ex = [
            [
                'name'=>'latihan backend',
                'kelas'=> 'XII RPL 2',
            ],
            [
                'name'=>'latihan backend',
                'kelas'=> 'XII RPL 2',
            ],
            [
                'name'=>'latihan backend',
                'kelas'=> 'XII RPL 2',
            ],
            [
                'name'=>'latihan backend',
                'kelas'=> 'XII RPL 2',
            ],
            [
                'name'=>'latihan backend',
                'kelas'=> 'XII RPL 2',
            ],
        ];
        foreach($ex as $exs){
            LatihanBackenEnd::create($exs);
        }
    }
}

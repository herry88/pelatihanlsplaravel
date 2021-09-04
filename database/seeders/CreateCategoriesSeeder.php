<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CreateCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = [
            [
                'name_category' => 'Baju',

            ],
            [
                'name_category' => 'celana',

            ],
            [
                'name_category' => 'sepatu'
            ]
        ];
        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Project;

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
        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@seeder.com',
                'email_verified_at' => now(),
                'level' => 'admin',
                'password' => bcrypt('passwordadmin')
            ],
            [
                'name' => 'kasir',
                'email' => 'kasir@seeder.com',
                'email_verified_at' => now(),
                'level' => 'kasir',
                'password' => bcrypt('passwordkasir')
            ],
        ];
        $categories = [
            [
                'name_category' => 'Jacket',
            ],
            [
                'name_category' => 'Baju',
            ],
            [
                'name_category' => 'baju muslim',
            ],
        ];

        $products = [
            [
                'name_product' => 'Baju Muslim Pria merek x',
                'description' => 'masih baru',
                'stock' => 12,
                'price' => 20000,
                'category_id' => 2
            ],
            [
                'name_product' => 'Jaket merek x',
                'description' => 'masih baru',
                'stock' => 12,
                'price' => 20000,
                'category_id' => 1
            ],
            [
                'name_product' => 'Baju  merek x',
                'description' => 'masih baru',
                'stock' => 12,
                'price' => 20000,
                'category_id' => 3
            ]
        ];

        foreach ($categories as $category){
            Category::create($category);
        }

        foreach($products as $product){
            Product::create($product);
        }

        foreach ($users as $user) {
            User::create($user);
        }
    }
}

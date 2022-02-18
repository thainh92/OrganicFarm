<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'id' => 1,
                'thumbnail' => 'fruit-1.jpg',
                'code' => '01',
                'name' => 'Fruits',
                'url' => '/fruits',
                'parent_id' => null,
            ],
            [
                'id' => 2,
                'thumbnail' => 'vegetable-1.jpg',
                'code' => '02',
                'name' => 'Vegetables',
                'url' => '/vegetables',
                'parent_id' => null,
            ],
            [
                'id' => 3,
                'thumbnail' => 'meat-1.jpg',
                'code' => '03',
                'name' => 'Meats',
                'url' => '/meats',
                'parent_id' => null,
            ],
            [
                'id' => 4,
                'thumbnail' => 'milk-1.jpg',
                'code' => '04',
                'name' => 'Milks',
                'url' => '/milks',
                'parent_id' => null,
            ],
            [
                'id' => 5,
                'thumbnail' => 'vegetable-2.jpg',
                'code' => '05',
                'name' => 'Organic vegetables',
                'url' => '/organic-vegetables',
                'parent_id' => 2,
            ],
            [
                'id' => 6,
                'thumbnail' => 'mushroom-1.jpg',
                'code' => '06',
                'name' => 'Fresh mushrooms',
                'url' => '/fresh-mushrooms',
                'parent_id' => 2,
            ],
            [
                'id' => 7,
                'thumbnail' => 'pork-1.jpg',
                'code' => '07',
                'name' => 'Pork',
                'url' => '/pork',
                'parent_id' => 3,
            ],
            [
                'id' => 8,
                'thumbnail' => 'beef-1.jpg',
                'code' => '08',
                'name' => 'Beef',
                'url' => '/beef',
                'parent_id' => 3,
            ],
            [
                'id' => 9,
                'thumbnail' => 'poultry-1.jpg',
                'code' => '09',
                'name' => 'Poultry',
                'url' => '/poultry',
                'parent_id' => 3,
            ],
            [
                'id' => 10,
                'thumbnail' => 'milk-1.jpg',
                'code' => '10',
                'name' => 'Organic Milk',
                'url' => '/organic-milk',
                'parent_id' => 4,
            ],
            [
                'id' => 11,
                'thumbnail' => 'fruits-1.jpg',
                'code' => '11',
                'name' => 'Fresh Fruit',
                'url' => '/fresh-fruit',
                'parent_id' => 1,
            ]
        ]);
    }
}

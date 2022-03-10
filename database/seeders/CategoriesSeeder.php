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
                'thumbnail' => 'fruit.jpg',
                'code' => '01',
                'name' => 'Fruits',
                'url' => 'fruits',
                'parent_id' => null,
                'created_at' => '2022-03-06 21:10:42',
                'updated_at' => '2022-03-06 21:10:42',
            ],
            [
                'id' => 2,
                'thumbnail' => '1644935644-Vegetable.jpg',
                'code' => '02',
                'name' => 'Vegetables',
                'url' => 'vegetables',
                'parent_id' => null,
                'created_at' => '2022-03-06 19:22:42',
                'updated_at' => '2022-03-06 19:22:42',
            ],
            [
                'id' => 3,
                'thumbnail' => 'meat.jpeg',
                'code' => '03',
                'name' => 'Meats',
                'url' => 'meats',
                'parent_id' => null,
                'created_at' => '2022-02-06 21:22:42',
                'updated_at' => '2022-02-06 21:22:42',
            ],
            [
                'id' => 4,
                'thumbnail' => 'milk-1.jpg',
                'code' => '04',
                'name' => 'Milks',
                'url' => 'milks',
                'parent_id' => null,
                'created_at' => '2022-03-04 21:22:42',
                'updated_at' => '2022-03-04 21:22:42',
            ],
            [
                'id' => 5,
                'thumbnail' => 'vegetable-2.jpg',
                'code' => '05',
                'name' => 'Organic vegetables',
                'url' => 'organic-vegetables',
                'parent_id' => 2,
                'created_at' => '2022-03-06 21:22:33',
                'updated_at' => '2022-03-06 21:22:33',
            ],
            [
                'id' => 6,
                'thumbnail' => 'mushroom-1.jpg',
                'code' => '06',
                'name' => 'Fresh mushrooms',
                'url' => 'fresh-mushrooms',
                'parent_id' => 2,
                'created_at' => '2022-03-06 12:12:42',
                'updated_at' => '2022-03-06 12:12:42',
            ],
            [
                'id' => 7,
                'thumbnail' => 'meat.jpeg',
                'code' => '07',
                'name' => 'Pork',
                'url' => 'pork',
                'parent_id' => 3,
                'created_at' => '2022-03-07 05:22:42',
                'updated_at' => '2022-03-07 05:22:42',
            ],
            [
                'id' => 8,
                'thumbnail' => 'meat.jpeg',
                'code' => '08',
                'name' => 'Beef',
                'url' => 'beef',
                'parent_id' => 3,
                'created_at' => '2022-03-06 20:22:42',
                'updated_at' => '2022-03-06 20:22:42',
            ],
            [
                'id' => 9,
                'thumbnail' => 'meat.jpeg',
                'code' => '09',
                'name' => 'Poultry',
                'url' => 'poultry',
                'parent_id' => 3,
                'created_at' => '2022-03-03 13:22:42',
                'updated_at' => '2022-03-03 13:22:42',
            ],
            [
                'id' => 10,
                'thumbnail' => 'milk.jpg',
                'code' => '10',
                'name' => 'Organic Milk',
                'url' => 'organic-milk',
                'parent_id' => 4,
                'created_at' => '2022-03-05 21:33:42',
                'updated_at' => '2022-03-05 21:33:42',
            ],
            [
                'id' => 11,
                'thumbnail' => 'fruits-1.jpg',
                'code' => '11',
                'name' => 'Fresh Fruit',
                'url' => 'fresh-fruit',
                'parent_id' => 1,
                'created_at' => '2022-03-02 21:26:42',
                'updated_at' => '2022-03-02 21:26:42',
            ],
            [
                'id' => 12,
                'thumbnail' => 'fruits-1.jpg',
                'code' => '12',
                'name' => 'Organic Fruit',
                'url' => 'organic-fruit',
                'parent_id' => 1,
                'created_at' => '2022-03-03 21:12:12',
                'updated_at' => '2022-03-03 21:12:12',
            ],
            [
                'id' => 13,
                'thumbnail' => 'milk.jpg',
                'code' => '13',
                'name' => 'Fresh Milk',
                'url' => 'fresh-milk',
                'parent_id' => 4,
                'created_at' => '2022-03-06 21:22:42',
                'updated_at' => '2022-03-06 21:22:42',
            ],
        ]);
    }
}

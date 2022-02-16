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
                'name' => 'fruit',
                'parent_id' => 0, 
            ],
            [
                'id' => 2,
                'thumbnail' => 'vegetable-1.jpg',
                'code' => '02',
                'name' => 'vegetable',
                'parent_id' => 0, 
            ],
            [
                'id' => 3,
                'thumbnail' => 'meat-1.jpg',
                'code' => '03',
                'name' => 'meat',
                'parent_id' => 0, 
            ],
            [
                'id' => 4,
                'thumbnail' => 'milk-1.jpg',
                'code' => '04',
                'name' => 'milk',
                'parent_id' => 0, 
            ],
            [
                'id' => 5,
                'thumbnail' => 'vegetable-2.jpg',
                'code' => '05',
                'name' => 'organic vegetables',
                'parent_id' => 2, 
            ],
            [
                'id' => 6,
                'thumbnail' => 'mushroom-1.jpg',
                'code' => '06',
                'name' => 'fresh mushrooms',
                'parent_id' => 2, 
            ],
            [
                'id' => 7,
                'thumbnail' => 'pork-1.jpg',
                'code' => '07',
                'name' => 'pork',
                'parent_id' => 3, 
            ],
            [
                'id' => 8,
                'thumbnail' => 'beef-1.jpg',
                'code' => '08',
                'name' => 'beef',
                'parent_id' => 3, 
            ],
            [
                'id' => 9,
                'thumbnail' => 'poultry-1.jpg',
                'code' => '09',
                'name' => 'poultry',
                'parent_id' => 3, 
            ],
            [
                'id' => 10,
                'thumbnail' => 'seafood-1.jpg',
                'code' => '10',
                'name' => 'fruit',
                'parent_id' => 3, 
            ]           
        ]);
    }
}

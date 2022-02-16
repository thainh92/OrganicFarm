<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            /*--- fruits ---*/
            [
                'id' => 1,
                'name' => 'Bananas',
                'thumbnail' => 'abc.jpg',
                'description' => 'bunch of 5',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 15,
                'status' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Avocado',
                'thumbnail' => 'fruits-2.jpg',
                'description' => 'each',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 15,
                'status' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Blueberries',
                'thumbnail' => 'fruit-3.jpg',
                'description' => '125g',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 20,
                'status' => 1,
            ],
            [
                'id' => 4,
                'name' => 'Oranges',
                'thumbnail' => 'fruit-4.jpg',
                'description' => '4 units',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 23,
                'status' => 1,
            ],
            [
                'id' => 5,
                'name' => 'Kiwi',
                'thumbnail' => 'fruit-5.jpg',
                'description' => 'each',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 14,
                'status' => 1,
            ],
            [
                'id' => 6,
                'name' => 'Apples',
                'thumbnail' => 'fruit-6.jpg',
                'description' => '6 units',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 12,
                'status' => 1,
            ],
            [
                'id' => 7,
                'name' => 'Limes',
                'thumbnail' => 'fruit-7.jpg',
                'description' => 'each',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 13,
                'status' => 1,
            ],
            [
                'id' => 8,
                'name' => 'Pomegranate',
                'thumbnail' => 'fruit-8.jpg',
                'description' => 'each',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 15,
                'status' => 1,
            ],
            [
                'id' => 9,
                'name' => 'Mango',
                'thumbnail' => 'fruit-9.jpg',
                'description' => 'each',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 10,
                'status' => 1,
            ],
            [
                'id' => 10,
                'name' => 'Pineapple',
                'thumbnail' => 'fruit-10.jpg',
                'description' => 'each',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 21,
                'status' => 1,
            ],
            [
                'id' => 11,
                'name' => 'Pears',
                'thumbnail' => 'fruit-11.jpg',
                'description' => '1 kg',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 22,
                'status' => 1,
            ],
            [
                'id' => 12,
                'name' => 'Sweetcorn',
                'thumbnail' => 'fruit-12.jpg',
                'description' => 'each',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 16,
                'status' => 1,
            ],
            [
                'id' => 13,
                'name' => 'Lemons',
                'thumbnail' => 'fruit-13.jpg',
                'description' => 'each',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 7,
                'status' => 1,
            ],
            [
                'id' => 14,
                'name' => 'Watermelon',
                'thumbnail' => 'fruit-15.jpg',
                'description' => 'each',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 30,
                'status' => 1,
            ],
            [
                'id' => 15,
                'name' => 'Cherry',
                'thumbnail' => 'fruit-15.jpg',
                'description' => '250g',
                'category_id' => 1,
                'discount_id' => null,
                'price' => 25,
                'status' => 1,
            ],
            [
                'id' => 16,
                'name' => 'Celery',
                'thumbnail' => 'vegetables-1.jpg',
                'description' => '250g',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 25,
                'status' => 1,
            ],
            [
                'id' => 17,
                'name' => 'Broccoli',
                'thumbnail' => 'vegetables-2.jpg',
                'description' => '250g',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 15,
                'status' => 1,
            ],
            [
                'id' => 18,
                'name' => 'Carrots',
                'thumbnail' => 'vegetables-3.jpg',
                'description' => '750g',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 25,
                'status' => 1,
            ],
            [
                'id' => 19,
                'name' => 'Aubergine',
                'thumbnail' => 'vegetables-4.jpg',
                'description' => 'each',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 23,
                'status' => 1,
            ],
            [
                'id' => 20,
                'name' => 'Cucumber',
                'thumbnail' => 'vegetables-5.jpg',
                'description' => '250g',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 25,
                'status' => 1,
            ],
            [
                'id' => 21,
                'name' => 'Spring Onions',
                'thumbnail' => 'vegetables-6.jpg',
                'description' => 'bunch',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 12,
                'status' => 1,
            ],
            [
                'id' => 22,
                'name' => 'Tundra Cabbage',
                'thumbnail' => 'vegetable-7.jpg',
                'description' => 'each',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 12,
                'status' => 1,
            ],
            [
                'id' => 23,
                'name' => 'Cherry Tomatoes',
                'thumbnail' => 'vegetable-8.jpg',
                'description' => '250g',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 15,
                'status' => 1,
            ],[
                'id' => 24,
                'name' => 'Spinach',
                'thumbnail' => 'vegetable-9.jpg',
                'description' => '300g',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 10,
                'status' => 1,
            ],
            [
                'id' => 25,
                'name' => 'Little Gem Lettuce',
                'thumbnail' => 'vegetable-10.jpg',
                'description' => '2 packs',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 13,
                'status' => 1,
            ],
            [
                'id' => 26,
                'name' => 'Shiitake Mushrooms',
                'thumbnail' => 'vegetable-11.jpg',
                'description' => '200g',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 22,
                'status' => 1,
            ],
            [
                'id' => 27,
                'name' => 'White Mushrooms',
                'thumbnail' => 'vegetable-12.jpg',
                'description' => '200g',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 15,
                'status' => 1,
            ],
            [
                'id' => 28,
                'name' => 'French Beans',
                'thumbnail' => 'vegetable-13.jpg',
                'description' => '250g',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 7,
                'status' => 1,
            ],
            [
                'id' => 29,
                'name' => 'Fennel',
                'thumbnail' => 'vegetable-14.jpg',
                'description' => 'each',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 3,
                'status' => 1,
            ],
            [
                'id' => 30,
                'name' => 'Potatoes',
                'thumbnail' => 'vegetable-15.jpg',
                'description' => '1.5kg',
                'category_id' => 2,
                'discount_id' => null,
                'price' => 25,
                'status' => 1,
            ],
            [
                'id' => 31,
                'name' => 'Whole Chicken',
                'thumbnail' => 'meat-1.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 25,
                'status' => 1,
            ],
            [
                'id' => 32,
                'name' => 'Beef Top Sirloin Steak',
                'thumbnail' => 'meat-2.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 30,
                'status' => 1,
            ],
            [
                'id' => 33,
                'name' => 'Fresh Pork Neck Steaks',
                'thumbnail' => 'meat-3.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 35,
                'status' => 1,
            ],
            [
                'id' => 34,
                'name' => 'Beef Arm Chuck Roast',
                'thumbnail' => 'meat-4.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 46,
                'status' => 1,
            ],
            [
                'id' => 35,
                'name' => 'Fresh Chicken Drumsticks',
                'thumbnail' => 'meat-5.jpg',
                'description' => 'Leg And Drum Sticks',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 20,
                'status' => 1,
            ],
            [
                'id' => 36,
                'name' => 'Beef Striploin Steak',
                'thumbnail' => 'meat-6.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 35,
                'status' => 1,
            ],
            [
                'id' => 37,
                'name' => 'Boneless Pork Shoulder',
                'thumbnail' => 'meat-7.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 30,
                'status' => 1,
            ],
            [
                'id' => 38,
                'name' => 'Raw Pork Ribs',
                'thumbnail' => 'meat-8.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 27,
                'status' => 1,
            ],
            [
                'id' => 39,
                'name' => 'Beef Chuck Center Roast',
                'thumbnail' => 'meat-9.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 38,
                'status' => 1,
            ],
            [
                'id' => 40,
                'name' => 'Chicken Feet & Paws',
                'thumbnail' => 'meat-10.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 22,
                'status' => 1,
            ],
            [
                'id' => 41,
                'name' => 'Beef T-bone Steak',
                'thumbnail' => 'meat-11.jpg',
                'description' => 'meat-11.jpg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 32,
                'status' => 1,
            ],
            [
                'id' => 42,
                'name' => 'Beef Blade Chuck Steak',
                'thumbnail' => 'meat-12.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 32,
                'status' => 1,
            ],
            [
                'id' => 43,
                'name' => 'Beef Hind Shank Steak',
                'thumbnail' => 'meat-13.jpgg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 30,
                'status' => 1,
            ],
            [
                'id' => 44,
                'name' => 'Berkshire Pork Belly',
                'thumbnail' => 'meat-14.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 25,
                'status' => 1,
            ],
            [
                'id' => 45,
                'name' => 'Chicken Breast Inner Fillet',
                'thumbnail' => 'meat-15.jpg',
                'description' => '10/15/20 kg',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 12,
                'status' => 1,
            ],
            [
                'id' => 46,
                'name' => 'Goat Cheese',
                'thumbnail' => 'milk-1.jpg',
                'description' => 'cheese',
                'category_id' => 4,
                'discount_id' => null,
                'price' => 15,
                'status' => 1,
            ],
            [
                'id' => 47,
                'name' => 'Sour Milk',
                'thumbnail' => 'milk-2.jpg',
                'description' => 'milk',
                'category_id' => 4,
                'discount_id' => null,
                'price' => 15,
                'status' => 1,
            ],
            [
                'id' => 48,
                'name' => 'Fresh Milk',
                'thumbnail' => 'milk-3.jpg',
                'description' => 'milk',
                'category_id' => 4,
                'discount_id' => null,
                'price' => 20,
                'status' => 1,
            ],
            [
                'id' => 49,
                'name' => 'Butter',
                'thumbnail' => 'milk-4.jpg',
                'description' => 'butter',
                'category_id' => 3,
                'discount_id' => null,
                'price' => 12,
                'status' => 1,
            ],
            [
                'id' => 50,
                'name' => 'Fruit Yogurt',
                'thumbnail' => 'milk-5.jpg',
                'description' => 'yogurt',
                'category_id' => 4,
                'discount_id' => null,
                'price' => 18,
                'status' => 1,
            ],
            [
                'id' => 51,
                'name' => 'Milk Coffee',
                'thumbnail' => 'milk-6.jpg',
                'description' => 'coffee',
                'category_id' => 4,
                'discount_id' => null,
                'price' => 12,
                'status' => 1,
            ],
            [
                'id' => 52,
                'name' => 'Cow Cheese',
                'thumbnail' => 'milk-7.jpg',
                'description' => 'cheese',
                'category_id' => 4,
                'discount_id' => null,
                'price' => 24,
                'status' => 1,
            ],
            [
                'id' => 53,
                'name' => 'Kefir',
                'thumbnail' => 'milk-8.jpg',
                'description' => 'kefir',
                'category_id' => 4,
                'discount_id' => null,
                'price' => 15,
                'status' => 1,
            ],
        ]);
    }
}

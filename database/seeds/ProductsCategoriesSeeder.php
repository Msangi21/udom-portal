<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ProductsCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([

        	[
        		'main_id' => '1',
        		'category_name' => 'Cell Phone & Accessories',
        		'description' => 'Smartphones',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '1',
        		'category_name' => 'Camera',
        		'description' => 'Camera',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '1',
        		'category_name' => 'Tablets',
        		'description' => 'Tablets',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '1',
        		'category_name' => 'Computer',
        		'description' => 'Computer',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '2',
        		'category_name' => 'Men\'s',
        		'description' => 'Men\'s',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '2',
        		'category_name' => 'Women\'s',
        		'description' => 'Women\'s',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '2',
        		'category_name' => 'Kid\'s',
        		'description' => 'Kid\'s',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],

        	[
        		'main_id' => '3',
        		'category_name' => 'Cars',
        		'description' => 'Cars',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '3',
        		'category_name' => 'Motorcycles',
        		'description' => 'Motorcycles',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '3',
        		'category_name' => 'Parts & Accessories',
        		'description' => 'Parts & Accessories',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '4',
        		'category_name' => 'Furniture',
        		'description' => 'Furniture',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '4',
        		'category_name' => 'Kitchen Tools',
        		'description' => 'Kitchen Tools',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '5',
        		'category_name' => 'Exercise & Fitness',
        		'description' => 'Exercise & Fitness',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	],
        	[
        		'main_id' => '5',
        		'category_name' => 'Tools',
        		'description' => 'Sport Tools',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        	]

        ]);
    }
}

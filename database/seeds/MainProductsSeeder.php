<?php

use Illuminate\Database\Seeder;

class MainProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('main_products')->insert([

        	[
        		'name' => 'Electronics',
        		'created_at' => '2017-11-26 06:32:21',
        		'updated_at' => '2017-11-26 06:32:21'

        	],
        	[
        		'name' => 'Fashion',
        		'created_at' => '2017-11-26 06:32:21',
        		'updated_at' => '2017-11-26 06:32:21'

        	],
        	[
        		'name' => 'Motors',
        		'created_at' => '2017-11-26 06:32:21',
        		'updated_at' => '2017-11-26 06:32:21'

        	],
        	[
        		'name' => 'Home',
        		'created_at' => '2017-11-26 06:32:21',
        		'updated_at' => '2017-11-26 06:32:21'

        	],
        	[
        		'name' => 'Sporting',
        		'created_at' => '2017-11-26 06:32:21',
        		'updated_at' => '2017-11-26 06:32:21'

        	]

        ]);
    }
}

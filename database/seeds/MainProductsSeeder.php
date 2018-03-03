<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()

        	],
        	[
        		'name' => 'Fashion',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()

        	],
        	[
        		'name' => 'Motors',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()

        	],
        	[
        		'name' => 'Home',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()

        	],
        	[
        		'name' => 'Sporting',
        		'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()

        	]

        ]);
    }
}

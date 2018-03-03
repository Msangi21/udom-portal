<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CollegesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('colleges')->insert([
        	[
        	
        	'college_name' => 'CIVE',
        	'description' => 'College Informatics and Virtual Education',
        	'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ],
        [
        	'college_name' => 'CNMS',
        	'description' => 'College of Natural & Mathematical Sciences',
        	'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ],
         [
        	'college_name' => 'COES',
        	'description' => 'College of Earth Sciences',
        	'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        ],

         [
        	'college_name' => 'CHAS',
        	'description' => 'College of Health & Allied Sciences',
        	'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        ],
        [
        	'college_name' => 'COED',
        	'description' => 'College of Education',
        	'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        ],
        [
        	'college_name' => 'CHSS',
        	'description' => 'College of humanities & Social Sciences',
        	'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now()
        ]

        ]);
    }
}

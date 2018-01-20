<?php

use Illuminate\Database\Seeder;

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
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ],
        [
        	'college_name' => 'CNMS',
        	'description' => 'College of Natural & Mathematical Sciences',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ],
         [
        	'college_name' => 'COES',
        	'description' => 'College of Earth Sciences',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ],

         [
        	'college_name' => 'CHAS',
        	'description' => 'College of Health & Allied Sciences',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ],
        [
        	'college_name' => 'COED',
        	'description' => 'College of Education',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ],
        [
        	'college_name' => 'CHSS',
        	'description' => 'College of humanities & Social Sciences',
        	'created_at' => NOW(),
        	'updated_at' => NOW()
        ]

        ]);
    }
}

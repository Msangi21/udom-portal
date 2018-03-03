<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'first_name' => 'Al-amin',
        	'last_name' => 'Msangi',
        	'email' => 'alaminhamadi@gmail.com',
        	'password' => bcrypt('akashi'),
        	'status' => false,
            'isAdmin' => true,
            'total_ads'=> 0,
        	'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now()
        ]);
    }
}

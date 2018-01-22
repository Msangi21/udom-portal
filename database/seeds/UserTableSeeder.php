<?php

use Illuminate\Database\Seeder;

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
        	'created_at' => '2018-01-20 10:50:03',
        	'updated_at' => '2018-01-20 10:50:03'
        ]);
    }
}

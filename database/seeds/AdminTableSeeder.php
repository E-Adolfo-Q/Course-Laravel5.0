<?php

use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class AdminTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
	   
	   \DB::table('users')->insert(array (
            'first_name'  => 'Esteban',
            'last_Name'   => 'Lagos',
            'email' => 'elagos@localhost.com',
            'password' => \Hash::make('secret'),
            'type'     => 'admin'       
	   	));
	   \DB::table('user_profiles')->insert(array(
           'user_id' => 1,
           'birthdate' => '1983/09/03' 
           
	   	));
	}

}

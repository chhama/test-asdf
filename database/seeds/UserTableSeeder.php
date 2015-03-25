<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('users')->truncate();
        $users = [
            'email' 		=> 'admin@mail.com',
			'password' 		=> Hash::make('password'),
			'name'		 	=> 'Administrator',
			'role'			=> 'Administrator',
			'remember_token'=> null,
            'created_at' 	=> date('Y-m-d H:i:s'),
            'updated_at' 	=> date('Y-m-d H:i:s'),
        ];

        DB::table('users')->insert($users);
	}

}
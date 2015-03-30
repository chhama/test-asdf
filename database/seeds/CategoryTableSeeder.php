<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoryTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('categories')->truncate();
        $categories = [
        	[
        		'id'			=> '1',
            	'name' 			=> 'Static',
            	'created_at' 	=> date('Y-m-d H:i:s'),
            	'updated_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'id'			=> '2',
            	'name' 			=> 'Notification',
            	'created_at' 	=> date('Y-m-d H:i:s'),
            	'updated_at' 	=> date('Y-m-d H:i:s'),
        	]
        ];

        DB::table('categories')->insert($categories);
	}

}
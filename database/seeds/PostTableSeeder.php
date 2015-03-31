<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PostTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('posts')->truncate();
        $posts = [
        	[
        		'id'			=> '1',
                'category_id'   => '1',
                'user_id'       => '1',
                'highlight'     => 'Yes',
            	'title'      	=> 'National urban health mission',
            	'created_at' 	=> date('Y-m-d H:i:s'),
            	'updated_at' 	=> date('Y-m-d H:i:s'),
        	]
        ];

        DB::table('posts')->insert($posts);
	}

}
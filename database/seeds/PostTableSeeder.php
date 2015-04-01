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
            	'title'      	=> 'About the state of Mizoram',
            	'created_at' 	=> date('Y-m-d H:i:s'),
            	'updated_at' 	=> date('Y-m-d H:i:s'),
        	],
            [
                'id'            => '2',
                'category_id'   => '1',
                'user_id'       => '1',
                'highlight'     => 'Yes',
                'title'         => 'Executive Summary',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '3',
                'category_id'   => '1',
                'user_id'       => '1',
                'highlight'     => 'Yes',
                'title'         => 'Conceptual Framework',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '4',
                'category_id'   => '1',
                'user_id'       => '1',
                'highlight'     => 'Yes',
                'title'         => 'Contact Us',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
        ];

        DB::table('posts')->insert($posts);
	}

}
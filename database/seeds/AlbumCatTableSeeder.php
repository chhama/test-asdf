<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AlbumCatTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('album_cats')->truncate();
        $albumcats = [
        	'id'			=>'1',
            'user_id' 		=> 1,
			'name' 			=> 'Static',
			'directory'		=> '/upload/static/',
            'created_at' 	=> date('Y-m-d H:i:s'),
            'updated_at' 	=> date('Y-m-d H:i:s'),
        ];

        DB::table('album_cats')->insert($albumcats);
	}

}
<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AlbumTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		DB::table('albums')->truncate();
        $album = [
        	'id'			=>'1',
            'user_id' 		=> 1,
            'album_cat_id' 	=> 1,
			'name' 			=> 'IEC/BCC',
			'cover' 		=> 'iec_bcc.jpeg',
			'directory'		=> '/upload/static/iec_bcc/',
            'created_at' 	=> date('Y-m-d H:i:s'),
            'updated_at' 	=> date('Y-m-d H:i:s'),
        ];

        DB::table('albums')->insert($album);
	}

}
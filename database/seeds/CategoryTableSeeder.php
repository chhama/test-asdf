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
            	'name' 			=> 'Static Page',
            	'created_at' 	=> date('Y-m-d H:i:s'),
            	'updated_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'id'			=> '2',
            	'name' 			=> 'Notification',
            	'created_at' 	=> date('Y-m-d H:i:s'),
            	'updated_at' 	=> date('Y-m-d H:i:s'),
        	],
            [
                'id'            => '3',
                'name'          => 'Schemes and Guidelines under NHM',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '4',
                'name'          => 'Tender',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '5',
                'name'          => 'Trainings',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '6',
                'name'          => 'MIS Report',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '7',
                'name'          => 'Activities Under NHM',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '8',
                'name'          => 'Citizen Charter',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '9',
                'name'          => 'IEC/BCC',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '10',
                'name'          => 'State PIP',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '11',
                'name'          => 'Goverment Order',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '12',
                'name'          => 'Mandatory Disclosure',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '13',
                'name'          => 'RCH',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '14',
                'name'          => 'NUHM',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '15',
                'name'          => 'Disease Control Programme',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '16',
                'name'          => 'Non Communicable Diseases',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '17',
                'name'          => 'Additionalities under NRHM',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'id'            => '18',
                'name'          => 'Post',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
        ];

        DB::table('categories')->insert($categories);
	}

}
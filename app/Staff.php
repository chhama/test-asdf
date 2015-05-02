<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model {

	protected $fillable = [
							'name',
							'fathers_name',
							'sex',
							'qualification',
							'address',
							'phone',
							'doj',
							'remark',
							'photo',
							'designation_id',
							'district_id',
							'hospital_category_id',
							'hospital_id',
							'type'
							];

}

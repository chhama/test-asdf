<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Posting extends Model {

	protected $fillable = [
		'staff_id',
		'designation_id',
		'district_id',
		'hospital_category_id',
		'hospital_id',
		'status',
		'order_no',
		'order_type',
		'order_renumeration',
		'order_date',
		'order_upto'
	];


}

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

	public function designation(){
		return $this->belongsTo('App\Designation','designation_id');
	}

	public function hospitalCategory(){
		return $this->belongsTo('App\HospitalCategory','hospital_category_id');
	}

	public function hospital(){
		return $this->belongsTo('App\Hospital','hospital_id');
	}

	public function district(){
		return $this->belongsTo('App\District','district_id');
	}


}

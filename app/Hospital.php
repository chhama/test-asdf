<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model {

	protected $fillable = ['district_id','hospital_category_id','name','type'];

	public function district(){
		return $this->belongsTo('App\District','district_id');
	}

	public function hospitalCategory(){
		return $this->belongsTo('App\HospitalCategory','hospital_category_id');
	}
}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ApprovedPay extends Model {

	protected $fillable = ['designation_id','hospital_type','amount','status'];

	public function designation(){
		return $this->belongsTo('App\Designation','designation_id');
	}

}

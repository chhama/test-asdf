<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class GeneratePay extends Model {

	protected $fillable = ['approved_pay_id','designation_id','hospital_type','arrear','wef','date'];

	public function approvedpay(){
		return $this->belongsTo('App\ApprovedPay','approved_pay_id');
	}

	public function designation(){
		return $this->belongsTo('App\Designation','designation_id');
	}

}

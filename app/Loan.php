<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Loan extends Model {

	protected $fillable = ['loan_head_id','staff_id','amount','emi','status'];

	public function loanhead(){
		return $this->belongsTo('App\LoanHead','loan_head_id');
	}

}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanPay extends Model {

	protected $fillable = ['loan_id','staff_id','emi'];

}

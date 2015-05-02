<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class LoanHead extends Model {

	protected $table = 'loan_heads';
	protected $fillable = ['name','code'];


}

<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model {

	protected $fillable = ['name','fathers_name','sex','qualification','address','phone','doj','remark','photo'];

}

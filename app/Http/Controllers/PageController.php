<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Post;
use App\Staff;

class PageController extends Controller {

	public function index()
	{
		$id = $_GET['id'];
		$page = Post::find($id);
		return view('page.show',compact('page'));
	}

	public function listByCat()
	{
		$id = $_GET['id'];
		$postByCat = Post::where('category_id','=',$id)->orderBy('id','desc')->paginate();
		return view('page.list',compact('postByCat','id'));
	}

	public function eHRMIS()
	{

		$ehrmis = Staff::orderBy('name')->paginate();
		$index = $ehrmis->perPage() * ($ehrmis->currentPage()-1) + 1;
		return view('page.ehrmis',compact('ehrmis','index'));
	}


	public function staff()
	{
		$id = $_GET['id'];
		$staff = Staff::find($id);
		return view('page.staff',compact('staff'));
	}
}

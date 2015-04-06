<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Hospital;
use App\Staff;
use App\Posting;

class EhrmisController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function facilities()
	{
		$hospitalAll	= Hospital::orderBy('name')->paginate();
		$index = $hospitalAll->perPage() * ($hospitalAll->currentPage()-1) + 1;

		return view('ehrmis.facilities',compact('hospitalAll','index'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function facdetail()
	{
		$id = $_GET['id'];
		$hospitalById	= Hospital::find($id);
		$postingByHos	= Posting::where('hospital_id','=',$id)
								 ->where('status','=','Current Post')
								 ->get();
		$index = 1;
		return view('ehrmis.facdetail',compact('hospitalById','postingByHos','index'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function hr()
	{
		$staffAll	= Staff::orderBy('name')->paginate();
		$index = $staffAll->perPage() * ($staffAll->currentPage()-1) + 1;

		return view('ehrmis.hr',compact('staffAll','index')); 
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function hrdetail()
	{
		$id = $_GET['id'];
		$index = 1;
		$staffById	= Staff::find($id);
		$postingAll = Posting::where('staff_id','=',$id)->orderBy('status')->get();
		return view('ehrmis.hrdetail',compact('staffById','postingAll','index')); 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

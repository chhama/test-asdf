<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\HospitalCategory;

class HospitalCategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$hospitalCategoryAll	= HospitalCategory::orderBy('name')->paginate();
		$index = $hospitalCategoryAll->perPage() * ($hospitalCategoryAll->currentPage()-1) + 1;

		return view('hospitalcategory.index',compact('hospitalCategoryAll','index')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$rules	= ['name'=>'required', 'code'=>'required'];
		$this->validate($request, $rules);

		HospitalCategory::create($request->except('_token'));

		return redirect('hospitalcategory');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$hospitalCategoryAll	= HospitalCategory::orderBy('name')->paginate();
		$hospitalCategoryById	= HospitalCategory::find($id);
		$index = $hospitalCategoryAll->perPage() * ($hospitalCategoryAll->currentPage()-1) + 1;

		return view('hospitalcategory.edit',compact('hospitalCategoryAll','hospitalCategoryById','index'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['name'=>'required', 'code'=>'required'];
		$this->validate($request, $rules);

		$hospitalCategory = HospitalCategory::find($id);
		$hospitalCategory->update($request->except('_token'));

		return redirect('hospitalcategory');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		HospitalCategory::destroy($id);
		return redirect('hospitalcategory');
	}

}

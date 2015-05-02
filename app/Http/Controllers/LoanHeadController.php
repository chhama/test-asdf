<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\LoanHead;

class LoanHeadController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$loanHeadAll	= LoanHead::orderBy('name')->paginate();
		$index = $loanHeadAll->perPage() * ($loanHeadAll->currentPage()-1) + 1;

		return view('loanhead.index',compact('loanHeadAll','index')); 
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

		LoanHead::create($request->except('_token'));

		return redirect('loanhead');
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
		$loanHeadAll	= LoanHead::orderBy('name')->paginate();
		$loanHeadById	= LoanHead::find($id);
		$index = $loanHeadAll->perPage() * ($loanHeadAll->currentPage()-1) + 1;

		return view('loanhead.edit',compact('loanHeadAll','loanHeadById','index'));
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

		$loanHead = LoanHead::find($id);
		$loanHead->update($request->except('_token'));

		return redirect('loanhead');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		LoanHead::destroy($id);
		return redirect('loanhead');
	}

}

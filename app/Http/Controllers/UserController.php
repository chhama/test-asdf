<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$userAll	= User::orderBy('name')->paginate();
		$index = $userAll->perPage() * ($userAll->currentPage()-1) + 1;

		return view('user.index',compact('userAll','index')); 
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
		$rules	= [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'role' => 'required',
			'password' => 'required|confirmed|min:6',
		];
		$this->validate($request, $rules);
		$request['password'] = bcrypt($request['password']);
		User::create($request->except('_token'));

		return redirect('user');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$userById	= User::find($id);
		return view('user.profile',compact('userById'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$userAll	= User::orderBy('name')->paginate();
		$userById	= User::find($id);
		$index = $userAll->perPage() * ($userAll->currentPage()-1) + 1;

		return view('user.edit',compact('userAll','userById','index'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users,email,'.$id,
		];
		if($request['password'] != '') {
			$rules = ['password' => 'required|confirmed|min:6'];
			$request['password'] = bcrypt($request['password']);
		}

		if($request['role'] != '')
			$rules = ['role' => 'required'];

		$this->validate($request, $rules);

		$user = User::find($id);
		$user->update($request->except('_token'));

		if($request['role'] == '') {
			return redirect('/user/'.$id);
		} else {
			return redirect('user');
		}
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		User::destroy($id);
		return redirect('user');
	}

}

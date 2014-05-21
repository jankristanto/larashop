<?php

class UsersController extends \BaseController {

	public function __construct() {
        $this->user = new User;
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$users =  $this->user->all();
		return View::make('users.index')
			->with('users',$users);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('users.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if($this->user->isValid(Input::all())){
			$user = new User; 
			$user->email = Input::get('email');
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->status = Input::get('status');
			$user->save(); 

			Session::flash('message','Successfully created user!');
			return Redirect::to('users');
		}else{
			return Redirect::to('users/create')
					->withErrors($this->users->getErrors())
					->withInput();
		}
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
		$user = $this->user->find($id); 
		return View::make('users.edit')
			->with('user',$user);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		if($this->user->isValid(Input::all())){
			$user = $this->user->find($id); 
			$user->email = Input::get('email');
			$user->username = Input::get('username');
			$user->password = Hash::make(Input::get('password'));
			$user->status = Input::get('status');
			$user->save(); 

			Session::flash('message','Successfully updated user!');
			return Redirect::to('users');
		}else{
			return Redirect::to('users.edit')
				->withErrors($this->user->getErrors())
				->withInput();
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
		//
	}


}

<?php

class CategoriesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories = Category::all(); 
		return View::make('categories.index')
			->with('categories',$categories);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('categories.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$validator = Validator::make(Input::all(), Category::$rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('categories/create')
				->withErrors($validator)
				->withInput(Input::except('name'));
		} else {
			// store
			$category = new Category;
			$category->name = Input::get('name');
			$category->save();

			// redirect
			Session::flash('message', 'Successfully created category!');
			return Redirect::to('categories');
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
		// get the category
		$category = Category::find($id);

		// show the view and pass the nerd to it
		return View::make('categories.show')
			->with('category', $category);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$category = Category::find($id); 
		return View::make('categories.edit')
			->with('category',$category);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(), Category::$rules);

		// process the login
		if ($validator->fails()) {
			return Redirect::to('categories/' . $id . '/edit')
				->withErrors($validator)
				->withInput(Input::except('name'));
		} else {
			// store
			$category = Category::find($id);
			$category->name = Input::get('name');
			
			$category->save();

			// redirect
			Session::flash('message', 'Successfully updated category!');
			return Redirect::to('categories');
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
		// delete
		$category = Category::find($id);
		$category->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the category!');
		return Redirect::to('categories');
	}


}

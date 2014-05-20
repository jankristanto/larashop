	<?php

class ProductsController extends \BaseController {

	public function __construct() {
        $this->product = new Product;
    }
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = $this->product->all(); 
		return View::make('products.index')
			->with('products',$products);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = array();

        foreach(Category::all() as $category){
            $categories[$category->id] = $category->name;
        }
		return View::make('products.create')
			->with('categories', $categories);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if($this->product->isValid(Input::all())){
			// store
			$product = new Product;
			$product->name = Input::get('name');
			$product->description = Input::get('description');
			$product->price = Input::get('price');
			$product->stock = Input::get('stock');
			$product->category_id = Input::get('category_id');
			$product->save();

			// redirect
			Session::flash('message', 'Successfully created product!');
			return Redirect::to('products');

		}else {
			return Redirect::to('products/create')
				->withErrors($this->product->getErrors())
				->withInput(Input::all());
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

<?php 

class Category extends Eloquent{
	protected $fillable = array('name'); 
	private $rules = array('name' => 'required|min:3');
	private $errors;

	public function products() {
         $this->hasMany('Product');
    }
    
	public function isValid($input){
		$validator = Validator::make($input, $this->rules);
		if ($validator->fails()){
            // set errors and return false
            $this->errors = $validator;
            return false;
        }
        // validation pass
        return true;
	}

	public function getErrors(){
        return $this->errors;
    }


}
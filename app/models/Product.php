<?php

class Product extends Eloquent{
    protected $fillable = array('category_id', 'name', 'description', 'price', 'availability', 'stock');
    
    private $rules = array(
        'category_id'=>'required|integer',
        'name'=>'required|min:2',
        'description'=>'required|min:10',
        'price'=>'required|numeric',
        'stock'=>'required|numeric', 
        'availability'=>'integer'
    );
    private $errors;
    
    public function category() {
        $this->belongsTo('Category');
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
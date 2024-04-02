<?php

namespace Atresna\Atresnaframework\core;

abstract class Model {
    function loadData($data){
        // iterasi data 
        foreach ($data as $key => $value) {
            # check 
            if(property_exists($this, $key)){
                $this->{$key} = $value;

            }
        }

    }

    // abstract function rules 
    abstract function rules() : array;


    function validate(){
        
    }
}
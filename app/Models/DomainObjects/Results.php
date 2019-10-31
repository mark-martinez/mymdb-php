<?php

namespace App\Models\DomainObjects;

class Results extends JsonModel {
    public $page;
    public $results;
    public $total_results;
    public $total_pages;
    /**
     * issues exists here where parent construct not called properly
     * code works fine without parent and construct code moved here instead
     * currently emits an empty object
     */
    
    function __construct(array $data) {
        parent::__construct($data);
    }
    
    /*
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(__CLASS__, $key)) {                
                $this->$key = $val;
            } 
        }
    }
    */
}
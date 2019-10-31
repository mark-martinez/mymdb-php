<?php

namespace App\Models\DomainObjects;

class JsonModel {
    function __construct(array $data) {
        foreach($data as $key => $val) {
            if(property_exists(get_class($this), $key)) {                
                $this->$key = $val;
            } 
        }
    }
}
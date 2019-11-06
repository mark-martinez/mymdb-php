<?php

namespace App\Models\DomainObjects;

class Results extends JsonModel {
    public $page;
    public $results;
    public $total_results;
    public $total_pages;

    function __construct(array $data) {
        //parent::__construct($data);
        $this->results = [];
        foreach($data as $key => $val) {
            if(property_exists(get_class($this), $key)) {
                //temp method
                //$results should be the only array anyways
                if (is_array($this->$key)) {
                    $newResults = [];
                    foreach($val as $listing) {
                        //dd($listing);
                        switch($listing['media_type']) {
                            case 'movie':
                                array_push($newResults, new Movie($listing));
                                break;
                            case 'tv':
                                array_push($newResults, new TV($listing));
                                break;
                            case 'person':
                                array_push($newResults, new Person($listing));
                                break;
                        }
                    }
                    $this->$key = $newResults;
                } else {
                    $this->$key = $val;
                }
            } 
        }
    }
}
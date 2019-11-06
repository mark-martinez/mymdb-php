<?php

namespace App\Models\DomainObjects;

class TV extends Listing {
    public $poster_path;
    public $popularity;
    public $overview;
    public $backdrop_path;
    public $vote_average;
    public $first_air_date;
    public $origin_country;
    public $genres;
    public $original_language;
    public $vote_count;
    public $name;
    public $original_name;
    
    function __construct($data) {
        parent::__construct($data);
        $this->mediaType = "tv";
        $this->backdrop_path = "http://image.tmdb.org/t/p/w300".$this->backdrop_path;
    }
}
<?php

namespace App\Models\DomainObjects;

class Movie extends Listing {
    public $adult;
    public $backdrop_path;
    public $genres;
    public $original_title;
    public $original_language;
    public $overview;
    public $popularity;
    public $poster_path;
    public $release_date;
    public $title;
    public $video;
    public $vote_count;
    public $vote_average;

    function __construct($data) {
        parent::__construct($data);
        $this->mediaType = "movie";
    }
}
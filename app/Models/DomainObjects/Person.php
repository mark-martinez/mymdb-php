<?php

namespace App\Models\DomainObjects;

class Person extends Listing {
    public $profile_path;
    public $adult;
    public $known_for;   //probably won't use
    public $name;
    public $popularity;

    function __construct($data) {
        parent::__construct($data);
        $this->mediaType = "person";
    }
}
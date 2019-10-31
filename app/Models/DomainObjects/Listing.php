<?php

namespace App\Models\DomainObjects;

abstract class Listing extends JsonModel {
    public $id;
    public $mediaType;
}
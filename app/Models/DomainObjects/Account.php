<?php

namespace App\Models\DomainObjects;

class Account extends JsonModel {
    public $avatar;
    public $id;
    public $name;
    public $includeAdult;
    public $userName;

    public function getAvatar() {
        return $this->avatar;
    }

    public function getId() {
        return $this->id;
    }
    
    public function getName() {
        return $this->name;
    }

    public function includesAdult() {
        return $this->includeAdult;
    }

    public function getUsername() {
        return $this->userName;
    }
}
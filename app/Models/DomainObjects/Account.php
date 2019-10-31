<?php

namespace App\Models\DomainObjects;

class Account extends JsonModel {
    private $avatar;
    private $id;
    private $name;
    private $includeAdult;
    private $userName;

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
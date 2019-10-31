<?php

namespace App\Models\DataMappers;

class Mapper {
    private $base_url = "https://api.themoviedb.org/3/";
    private $apiKey = "1a9755b22a226ad22bb40fc91e9ed04a";

    public function getBaseUrl() {
        return $this->base_url;
    }

    public function getApiKey() {
        return $this->apiKey;
    }
}
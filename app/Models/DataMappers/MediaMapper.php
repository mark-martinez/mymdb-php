<?php 

namespace App\Models\DataMappers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Models\DomainObjects;

class MediaMapper extends Mapper {
    public function searchMulti($query) {
        $json = file_get_contents($this->getBaseUrl()."search/multi?api_key=".$this->getApiKey()
                                ."&query=".$query);
        return json_decode($json, true);
    }

    public function getById($id, $type) {
        $json = file_get_contents($this->getBaseUrl().$type."/".$id."?api_key=".$this->getApiKey());
        return json_decode($json, true);
    }
}
<?php

namespace App\Models\DataMappers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TmdbMapper extends Mapper {
    public function createRequestToken() {
        $json = file_get_contents($this->getBaseUrl()."authentication/token/new?api_key=".$this->getApiKey());
        $results = json_decode($json, true);
        if ($results['success'] == true) {
            return $results['request_token'];
        } else {
            //throw failure
        }
    }

    public function postSession($requestToken) {
        $client = new Client();
        $response = $client->post("https://api.themoviedb.org/3/authentication/session/new?api_key=".$this->getApiKey(), [
            'json'=>['request_token'=>$requestToken]
        ]);
        return json_decode($response->getBody()->getContents(), true);
    }

    public function postSessionWithLogin() {

    }

    public function postGuestSession() {
        $json = file_get_contents($this->getBaseUrl()."/authentication/guest_session/new?api_key=".$this->getApiKey());
        $results = json_decode($json, true);
        if ($results['success'] == true) {
            return $results['guest_session_id'];
        }
    }

    public function removeSession() {

    }
}
<?php

namespace App\Models\DataMappers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TmdbMapper extends Mapper {
    public function createRequestToken() {
        $client = new Client();
        $response = $client->request('GET', $this->getBaseUrl()."authentication/token/new", [
            'query' => [
                'api_key' => $this->getApiKey()
            ]
        ]);
        
        $body = $response->getBody()->getContents();
        
        $results = json_decode($body, true);
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
        $client = new Client();
        $response = $client->request('GET', $this->getBaseUrl()."authentication/guest_session/new", [
            'query' => [
                'api_key' => $this->getApiKey()
            ]
        ]);

        $body = $response->getBody()->getContents();

        $results = json_decode($body, true);
        if ($results['success'] == true) {
            return $results['guest_session_id'];
        }
    }

    public function removeSession() {

    }
}
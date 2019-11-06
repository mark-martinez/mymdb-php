<?php

namespace App\Models\DataMappers;

use GuzzleHttp\Client;

class AccountMapper extends Mapper {
    public function getAccount() {
        $client = new Client();
        $response = $client->request('GET', $this->getBaseUrl().'account', [
            'query' => [
                'api_key' => $this->getApiKey()
            ]
        ]);
        $body = $response->getBody()->getContents();
        return json_decode($body, true);
    }
}
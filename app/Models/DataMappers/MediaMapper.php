<?php 

namespace App\Models\DataMappers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class MediaMapper extends Mapper {
    public function searchMulti($query, $page = 1) {
        $client = new Client();
        $response = $client->request('GET', $this->getBaseUrl().$this->getMultiSearch(), [
            'query' => [
                'api_key' => $this->getApiKey(),
                'query' => $query
            ]
        ]);
        $body = $response->getBody()->getContents();
        return json_decode($body, true);
    }

    public function getById($id, $type) {
        $client = new Client();
        $response = $client->request('GET', $this->getBaseUrl().$type."/".$id, [
            'query' => [
                'api_key' => $this->getApiKey()
            ]
        ]);
        
        $body = $response->getBody()->getContents();
        return json_decode($body, true);
    }

    public function getTrending($media_type = "all", $time_window = "day") {
        $client = new Client();
        $response = $client->request('GET', $this->getBaseUrl()."trending/".$media_type."/".$time_window, [
            'query' => [
                'api_key' => $this->getApiKey()
            ]
        ]);

        $body = $response->getBody()->getContents();
        return json_decode($body, true);
    }
}
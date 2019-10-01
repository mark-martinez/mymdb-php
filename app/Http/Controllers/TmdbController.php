<?php

namespace App\Http\Controllers;

use App\Models\ResultsMeta;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TmdbController extends Controller
{
    public function query(Request $req) {
        if (SessionController::getSessionData($req) != null) {
            if ($req->exists('query')) {
                $validator = validator($req->all(), [
                    'query' => 'required|string|max:32|regex:/(^([a-zA-Z0-9;: -]+)(\d+)?$)/u'
                ]);

                if ($validator->fails()) {
                    return view('pages/landing')->withErrors($validator);
                } else {
                    $apiKey = SessionController::getSessionData($req);
                    $json = file_get_contents(get_query_string($req, "MULTI", null, null, $req['query']));
                    $results = new ResultsMeta; //change
                    $results = json_decode($json, true);
                    $arr = $results['results'];
                    return view('pages/results', compact('arr'));
                }
            } else {
                return view('pages/search');
            }
        } else {
            return view('pages/landing')->withErrors('You must sign-in as a User or a Guest');
        }
    }

    public function request(Request $req, $type, $id) {
        $apiKey = SessionController::getSessionData($req);
        $json = file_get_contents(get_query_string($req, "SPECIFIC", $id, $type));
        $results = json_decode($json, true);
        if (array_key_exists('image_url', $results)) {
            $results['image_url'] = 'https://image.tmdb.org/t/p/original/'.$results['backdrop_path'];
        }
        return view('pages/modalListing', compact('results'));
    }

    static function authenticateSession(Request $req) {
        $client = new Client();
        $response = $client->post(get_query_string($req, "AUTHENTICATE_USER_SESSION"), [
            'json'=>['request_token'=>SessionController::getRequestToken($req)]
        ]);
        return $json = json_decode($response->getBody()->getContents(), true);
    }
}
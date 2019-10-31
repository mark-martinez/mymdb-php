<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services\TmdbService;

class TmdbController extends Controller {
    public function query(Request $req) {
        $tmdbService = new TmdbService();

        if ($tmdbService->sessionExists($req)) {
            if ($req->exists('query')) {
                $validator = validator($req->all(), [
                    'query' => 'required|string|max:32|regex:/(^([a-zA-Z0-9;: -]+)(\d+)?$)/u'
                ]);

                if (!$validator->fails()) {
                    $results = $tmdbService->searchMulti($req['query']);
                    return view('pages/results', compact('results'));
                } else {                    
                    return view('pages/login')->withErrors($validator);
                }
            } else {
                return view('pages/search')->withErrors('You must submit input');
            }
        } else {
            return view('pages/login')->withErrors('You must sign-in as a User or a Guest');
        }
    }

    public function request(Request $req, $type, $id) {
        $tmdbService = new TmdbService();

        if ($tmdbService->sessionExists($req)) {
            $results = $tmdbService->getById($id, $type);
            return view('pages/modalListing', compact('results'));
        }
    }
}
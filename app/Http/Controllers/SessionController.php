<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    static function getSessionData(Request $req) {
        if ($req->session()->has('apiKey'))
            return $req->session()->get('apiKey');
    }

    static function sessionExists(Request $req, $apiKey) {
        return ($req->session()->has('apiKey'));
    }

    static function storeSessionData(Request $req, $apiKey) {
        $req->session()->put('apiKey', $apiKey);
    }

    static function deleteSessionData(Request $req) {
        $req->session()->forget('apiKey');
    }
}

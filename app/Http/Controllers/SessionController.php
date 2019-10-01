<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    static function createSession(Request $req) {
        $json = TmdbController::authenticateSession($req);
        //should parse bad codes
        
        if (isset($json['session_id'])) {
            self::storeSessionData($req, $json['session_id']);
        }
        return view('pages/search');
    }

    static function getSessionData(Request $req) {
        if ($req->session()->has('session_id'))
            return $req->session()->get('session_id');
    }

    static function sessionExists(Request $req) {
        return ($req->session()->has('session_id'));
    }

    static function storeSessionData(Request $req, $sessionId) {
        $req->session()->put('session_id', $sessionId);
    }

    static function deleteSessionData(Request $req) {
        $req->session()->forget('session_id');
    }

    static function storeRequestToken(Request $req, $token) {
        $req->session()->put('request_token', $token);
    }

    static function getRequestToken(Request $req) {
        if ($req->session()->has('request_token'))
            return $req->session()->get('request_token');
    }
}

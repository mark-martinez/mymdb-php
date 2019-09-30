<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    static function createSession(Request $req) {
        $json = file_get_contents(get_query_string($req, "AUTHENTICATE_USER_SESSION"));
        $results = json_decode($json, true);
        dd($results);
        $req->session()->put('sessionId', $results['session_id']);
        return redirect('/pages/search');
    }

    static function getSessionData(Request $req) {
        if ($req->session()->has('sessionId'))
            return $req->session()->get('sessionId');
    }

    static function sessionExists(Request $req) {
        return ($req->session()->has('sessionId'));
    }

    static function storeSessionData(Request $req, $sessionId) {
        $req->session()->put('sessionId', $sessionId);
    }

    static function deleteSessionData(Request $req) {
        $req->session()->forget('sessionId');
    }
}

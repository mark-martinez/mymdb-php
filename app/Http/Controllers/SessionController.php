<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    static function createSession(Request $req, $sessionId) {
        $req->session()->put('sessionId', $sessionId);
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

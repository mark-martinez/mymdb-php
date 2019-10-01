<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller 
{
    public function submit(Request $req, $type) {
        switch($type) {
            case "user":
                $json = file_get_contents(get_query_string($req, "AUTHENTICATE_TOKEN"));
                $results = json_decode($json, true);
                
                $requestToken = $results['request_token'];
                SessionController::storeRequestToken($req, $requestToken);
                
                return redirect(get_query_string($req, "TOKEN_APPROVAL", $requestToken));
                break;
            case "guest":
                $json = file_get_contents(get_query_string($req, "AUTHENTICATE_GUEST_SESSION"));
                $results = json_decode($json, true);
                $sessionId = $results['guest_session_id'];

                SessionController::storeSessionData($req, $sessionId);
                return redirect('search');
                break;
            default:
                return abort(404);
                break;

        }
    }
}

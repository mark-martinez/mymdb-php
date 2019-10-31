<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services\TmdbService;

class LoginController extends Controller {
    public function isLoggedIn(Request $req) {
        $tmdbService = new TmdbService();
        if ($tmdbService->sessionExists($req)) {
            return view('pages/home');
        } else {
            return redirect('login');
        }
    }

    public function submit(Request $req, $type) {
        $tmdbService = new TmdbService();
        switch($type) {
            case "user":
                if (!$tmdbService->sessionExists($req)) {
                    $tmdbService->createToken($req);
                    return redirect('https://www.themoviedb.org/authenticate/'.$tmdbService->getRequestToken($req).
                                    '?redirect_to='.url('/login/success'));
                } else {
                    return redirect('search');
                }
                
            case "guest":
                if (!$tmdbService->sessionExists($req)) {
                    $tmdbService->createGuestSession($req);
                }                
                return redirect('login/success');

            case "success":
                $tmdbService->createSession($req);
                return redirect('home');

            default:
                return abort(404);
        }
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Services\TmdbService;

class HomeController extends Controller {
    public function render(Request $req) {
        $tmdbService = new TmdbService();

        if ($tmdbService->sessionExists($req)) {
            $trendingResults = $tmdbService->getTrending("all", "day");
            return view('pages/home', compact('trendingResults'));
            //->with(compact('', '', ''))
        } else {
            dd("here");
        }
    }
}
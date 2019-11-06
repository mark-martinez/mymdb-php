<?php

namespace App\Models\Services;

use App\Models\DataMappers\AccountMapper;
use App\Models\DataMappers\TmdbMapper;
use App\Models\DataMappers\MediaMapper;
use App\Models\DomainObjects\Movie;
use App\Models\DomainObjects\Person;
use App\Models\DomainObjects\Results;
use App\Models\DomainObjects\TV;
use Illuminate\Http\Request;

class TmdbService {
    public $tmdbMapper, $mediaMapper, $accountMapper;

    function __construct() {
        //attemp connection to tmdb api first
        $this->tmdbMapper = new TmdbMapper();
    }
    
    //AUTHENTICATION
    public function createToken(Request $req) {
        $req->session()->put('request_token', $this->tmdbMapper->createRequestToken());
    }

    public function getRequestToken(Request $req) {
        if ($req->session()->has('request_token'))
            return $req->session()->get('request_token');
    }

    public function createSession(Request $req) {
        $sessionId = $this->tmdbMapper->postSession($this->getRequestToken($req));
        $req->session()->put('session_id', $sessionId);
    }
    
    public static function sessionExists(Request $req) {
        return ($req->session()->has('session_id'));
    }

    public static function removeSession(Request $req) {
        $req->session()->forget('session_id');
    }

    public function createGuestSession(Request $req) {
        $req->session()->put('session_id', $this->tmdbMapper->postGuestSession());
    }
    //AUTHENTICATION END

    //ACCOUNT
    public function getAccount() {
        return new Account($this->accountMapper->getAccount());
    }

    public function getFavorites($mediaType) {

    }

    public function getRated($mediaType) {

    }

    public function getWatchlist($mediaType) {

    }

    public function addToWatchlist($mediaType, $id, $onWatchlist) {

    }

    public function setFavorite($mediaType, $id, $isFavorite) {

    }
    //END ACCOUNT

    //QUERY
    public function searchMulti($query, $page) {
        $mediaMapper = new MediaMapper();
        $json = $mediaMapper->searchMulti($query, $page);
        return new Results($json);
    }

    public function getById($id, $type) {
        $mediaMapper = new MediaMapper();
        $json = $mediaMapper->getById($id, $type);
        switch ($type) {
            case "movie":
                return new Movie($json);
            case "tv":
                return new TV($json);
            case "person";
                return new Person($json);
        }
    }

    public function getTrending($media_type = "all", $time_window = "day") {
        $mediaMapper = new MediaMapper();
        $json = $mediaMapper->getTrending($media_type, $time_window);
        return new Results($json);
    }

    public function discover() {

    }
    //END QUERY
}
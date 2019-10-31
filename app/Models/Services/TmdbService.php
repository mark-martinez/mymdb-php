<?php

namespace App\Models\Services;

use App\Models\DataMappers\TmdbMapper;
use App\Models\DataMappers\MediaMapper;
use App\Models\DomainObjects\Movie;
use App\Models\DomainObjects\Person;
use App\Models\DomainObjects\Results;
use App\Models\DomainObjects\TV;
use Illuminate\Http\Request;

class TmdbService {
    public $mapper;

    function __construct() {
        //attemp connection to tmdb api first
        $this->mapper = new TmdbMapper();
    }
    
    //AUTHENTICATION
    public function createToken(Request $req) {
        $req->session()->put('request_token', $this->mapper->createRequestToken());
    }

    public function getRequestToken(Request $req) {
        if ($req->session()->has('request_token'))
            return $req->session()->get('request_token');
    }

    public function createSession(Request $req) {
        $sessionId = $this->mapper->postSession($this->getRequestToken($req));
        $req->session()->put('session_id', $sessionId);
    }
    
    public static function sessionExists(Request $req) {
        return ($req->session()->has('session_id'));
    }

    public function createGuestSession(Request $req) {
        $req->session()->put('session_id', $this->mapper->postGuestSession());
    }
    //AUTHENTICATION END

    //ACCOUNT
    public function getAccount() {

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
    public function searchMulti($query) {
        $mediaMapper = new MediaMapper();
        $json = $mediaMapper->searchMulti($query);
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

    public function getTrending() {

    }

    public function discover() {

    }
    //END QUERY
}
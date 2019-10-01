<?php

use Illuminate\Http\Request;

function get_query_string(Request $req, $category, $id = null, $type = null, $query = null) {
    $base_url = "https://api.themoviedb.org/3/";
    $apiKey = "1a9755b22a226ad22bb40fc91e9ed04a";

    switch($category) {
        case "AUTHENTICATE_TOKEN":
            return $base_url."authentication/token/new?api_key=".$apiKey;
            break;
        case "TOKEN_APPROVAL":
            return "https://www.themoviedb.org/authenticate/".$id."?redirect_to=".url('/session');
        case "AUTHENTICATE_USER_SESSION":
            return $base_url."authentication/session/new?api_key=".$apiKey;
        case "AUTHENTICATE_GUEST_SESSION":
            return $base_url."authentication/guest_session/new?api_key=".$apiKey;
        case "MULTI":
            return $base_url."search/multi?api_key=".$apiKey."&query=".$query;
        case "SPECIFIC":
            return $base_url.$type."/".$id."?api_key=".$apiKey;
    }
}
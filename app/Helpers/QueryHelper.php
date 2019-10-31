<?php
//transfer all of this to a Data Mapper object
function get_query_string($category, $id = null, $type = null, $query = null) {
    $base_url = "https://api.themoviedb.org/3/";
    $apiKey = "1a9755b22a226ad22bb40fc91e9ed04a";

    switch($category) {
        case "AUTHENTICATE_TOKEN":  //TMDBMAPPER
            return $base_url."authentication/token/new?api_key=".$apiKey;
        case "TOKEN_APPROVAL":  //TMDBMAPPER
            return "https://www.themoviedb.org/authenticate/".$id."?redirect_to=".url('/home');
        case "AUTHENTICATE_USER_SESSION":   //TMDBMAPPER
            return $base_url."authentication/session/new?api_key=".$apiKey;
        case "AUTHENTICATE_GUEST_SESSION":  //TMDBMAPPER
            return $base_url."authentication/guest_session/new?api_key=".$apiKey;
        case "MULTI":   //MEDIAMAPPER
            return $base_url."search/multi?api_key=".$apiKey."&query=".$query;
        case "SPECIFIC":    //MEDIAMAPPER
            return $base_url.$type."/".$id."?api_key=".$apiKey;
    }
}
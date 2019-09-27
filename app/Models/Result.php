<?php

namespace App\Models;

class Result {
    public function getPoster_path() { 
        return $this->poster_path ;
   }
   public function setPoster_path($poster_path) { 
        $this->poster_path = $poster_path ;
   }
   public $poster_path; //String

   public function getPopularity() { 
        return $this->popularity ;
   }
   public function setPopularity($popularity) { 
        $this->popularity = $popularity ;
   }
   public $popularity; //double

   public function getVote_count() { 
        return $this->vote_count ;
   }
   public function setVote_count($vote_count) { 
        $this->vote_count = $vote_count ;
   }
   public $vote_count; //int

   public function getVideo() { 
        return $this->video ;
   }
   public function setVideo($video) { 
        $this->video = $video ;
   }
   public $video; //boolean

   public function getMedia_type() { 
        return $this->media_type ;
   }
   public function setMedia_type($media_type) { 
        $this->media_type = $media_type ;
   }
   public $media_type; //String

   public function getId() { 
        return $this->id ;
   }
   public function setId($id) { 
        $this->id = $id ;
   }
   public $id; //int

   public function getAdult() { 
        return $this->adult ;
   }
   public function setAdult($adult) { 
        $this->adult = $adult ;
   }
   public $adult; //boolean

   public function getBackdrop_path() { 
        return $this->backdrop_path ;
   }
   public function setBackdrop_path($backdrop_path) { 
        $this->backdrop_path = $backdrop_path ;
   }
   public $backdrop_path; //String

   public function getOriginal_language() { 
        return $this->original_language ;
   }
   public function setOriginal_language($original_language) { 
        $this->original_language = $original_language ;
   }
   public $original_language; //String

   public function getOriginal_title() { 
        return $this->original_title ;
   }
   public function setOriginal_title($original_title) { 
        $this->original_title = $original_title ;
   }
   public $original_title; //String

   public function getGenre_ids() { 
        return $this->genre_ids ;
   }
   public function setGenre_ids($genre_ids) { 
        $this->genre_ids = $genre_ids ;
   }
   public $genre_ids; //array(int)

   public function getTitle() { 
        return $this->title ;
   }
   public function setTitle($title) { 
        $this->title = $title ;
   }
   public $title; //String

   public function getVote_average() { 
        return $this->vote_average ;
   }
   public function setVote_average($vote_average) { 
        $this->vote_average = $vote_average ;
   }
   public $vote_average; //double

   public function getOverview() { 
        return $this->overview ;
   }
   public function setOverview($overview) { 
        $this->overview = $overview ;
   }
   public $overview; //String

   public function getRelease_date() { 
        return $this->release_date ;
   }
   public function setRelease_date($release_date) { 
        $this->release_date = $release_date ;
   }
   public $release_date; //String
}
<?php

namespace App\Models;

class ResultsMeta {
    public function getPage() { 
        return $this->page;
    }
    public function setPage($page) { 
        $this->page = $page;
    }
    public $page; //int

    public function getTotal_results() { 
        return $this->total_results;
    }
    public function setTotal_results($total_results) { 
        $this->total_results = $total_results;
    }
    public $total_results; //int

    public function getTotal_pages() { 
        return $this->total_pages;
    }
    public function setTotal_pages($total_pages) { 
        $this->total_pages = $total_pages;
    }
    public $total_pages; //int

    public function getResults() { 
        return $this->results;
    }
    public function setResults($results) { 
        $this->results = $results;
    }
    public $results; //array(Result)
    }

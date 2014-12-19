<?php

namespace library\bootstrap\resource;

class Request {
    
    public $url_parts;

    public function __construct() {
        if (isset($_GET['url'])) {
            //route parts
            $url = $_GET['url'];
            unset($_GET['url']);
            $url = rtrim($url, '/');
            $url = strtolower($url);
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $this->url_parts = explode('/', $url);
        }
    }

}

?>
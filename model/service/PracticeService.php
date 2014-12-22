<?php

//namespace controller\access;

//use \controller\Controller as Controller;

class PracticeService extends Model {

    public $url;
    public $blog;
    public $num;

    public function __construct() {
        parent::__construct();
        $this->url = '';
        $this->blog = array();
        $this->num = 0;
    }
    
    public fucntion setURL($url) {
        $this->url
    }
    
    public function execute() {
        new CurlMapper
        new CurlDomain
        new DatabaseMapper
        new TowerDomain
        
        1. $html = CurlMapper->curl($this->url);
        2. $parsed = CurlDomain->parse($html)
        2. DatabaseMapper->insert($html);
        3. $this->blog = DatabaseMapper->select();
        4. while(until no more tuples)
                $this->num = TowerDomain->calc(blog[tuple[1]]);
    }

}

?>
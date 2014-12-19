<?php

namespace model\domain;

class TrailDomain {

    public $trail;
    public $address;
    
    public function __construct($trail = array()) {
        $this->trail = $trail;
        if (!empty($this->trail)) {
            $this->address = end($this->trail);
        } else {
            $this->address = '/';
        }
    }
    
    public function checkRequest($address) {
        $address = $this->parseAddress($address);
        if (empty($this->trail) || end($this->trail) != $address) {
            $this->address = $address;
            return true;
        } else {
            return false;
        }
    }
    
    private function parseAddress($address) {
        $address = strtolower($address);
        $address = filter_var($address, FILTER_SANITIZE_URL);
        return $address;
    }

}

?>
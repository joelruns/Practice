<?php

namespace model\service;

use \model\Model as Model;
use \model\mapper\SessionMapper as SessionMapper;
use \model\domain\TrailDomain as TrailDomain;
use \model\domain\TestDomain as TestDomain;

class TestService extends Model {
    
    private $session_mapper;
    private $trail_domain;
    private $test_domain;
    public $total_time;
    
    public function __construct() {
        parent::__construct(true);
        $this->session_mapper = new SessionMapper();
        $this->trail_domain = new TrailDomain($this->session_mapper->getTrail());
        $this->test_domain = new TestDomain();
        $this->total_time = $this->test_domain->getTotal($this->session_mapper->getStartTime(), $this->session_mapper->getLastTime());
    }
    
    public function pushAddress($address) {
        if ($this->trail_domain->checkRequest($address)) {
            $this->session_mapper->setTrail($this->trail_domain->address);
        }
    }

}

?>
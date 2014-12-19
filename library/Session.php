<?php

namespace library;

class Session {
    
    public function __construct($lifetime, $secure, $idle) {
        ini_set('session.gc_maxlifetime', $lifetime);
        session_set_cookie_params($lifetime, '/', null, $secure, true);
        session_start();
        $this->checkTime($idle, $lifetime);
    }
    
    private function checkTime($idle, $lifetime) {
        //end idle sessions
        if (isset($_SESSION['last_time']) && time() - $_SESSION['last_time'] > $idle) {
            $this->endSession();
        } $_SESSION['last_time'] = time();
        //regenerate long sessions
        if (!isset($_SESSION['start_time'])) {
            $_SESSION['start_time'] = time();
        } else if (time() - $_SESSION['start_time'] > $lifetime) {
            session_regenerate_id(true);
            $_SESSION['start_time'] = time();
        }
    }

}

?>
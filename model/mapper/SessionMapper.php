<?php

namespace model\mapper;

class SessionMapper {

    public function setTrail($address) {
        $_SESSION['trail'][] = $address;
        if (count($_SESSION['trail']) > 100) {
            $_SESSION['trail'] = array_slice($_SESSION['trail'], 1, 100);
        }
    }

    public function getTrail() {
        if (isset($_SESSION['trail'])) {
            return $_SESSION['trail'];
        } else {
            return false;
        }
    }
    
    public function setUserId($user_id) {
        $_SESSION['user_id'] = $user_id;
    }
    
    public function getUserId() {
        if (isset($_SESSION['user_id'])) {
            return $_SESSION['user_id'];
        }
    }
    
    public function setLastTime() {
        $_SESSION['last_time'] = time();
    }
    
    public function getLastTime() {
        if (isset($_SESSION['last_time'])) {
            return $_SESSION['last_time'];
        }
    }
    
    public function getStartTime() {
        if (isset($_SESSION['start_time'])) {
            return $_SESSION['start_time'];
        }
    }
    
    public function endSession() {
        $_SESSION = array();
        session_destroy();
    }

}

?>
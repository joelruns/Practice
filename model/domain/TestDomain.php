<?php

namespace model\domain;

class TestDomain {

    public function getTotal($start_time, $last_time) {
        return $last_time - $start_time;
    }

}

?>
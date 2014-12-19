<?php

namespace library\bootstrap\rule;

class ErrorRule {
    
    public function execute($url_parts) {
        $routes['model'] = 'Static';
        $routes['controller'] = 'Static';
        $routes['view'] = 'Error';
        return $routes;
    }

}

?>
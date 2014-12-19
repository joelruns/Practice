<?php

namespace library\bootstrap\rule;

class ErrorRule {
    
    public function execute($url_parts) {
        $routes['model'] = 'Error';
        $routes['controller'] = 'Error';
        $routes['view'] = 'Error';
        return $routes;
    }

}

?>
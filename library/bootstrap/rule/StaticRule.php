<?php

namespace library\bootstrap\rule;

class StaticRule {

    public function execute($url_parts) {
        $routes['model'] = 'Static';
        $routes['controller'] = 'Static';
        if (!empty($url_parts[1])) {
            $routes['method'] = $url_parts[1];
        } if (empty($url_parts[0])) {
            $routes['view'] = 'Index';
        } else if ($url_parts[0] != 'ajax') {
            $routes['view'] = ucfirst($url_parts[0]);
        } return $routes;
    }

}

?>
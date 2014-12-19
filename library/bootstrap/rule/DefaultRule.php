<?php

namespace library\bootstrap\rule;

class DefaultRule {
    
    public function execute($url_parts) {
        $url_parts[0] = ucfirst($url_parts[0]);
        $routes['model'] = $url_parts[0];
        $routes['controller'] = $url_parts[0];
        if (!empty($url_parts[1])) {
            $routes['method'] = $url_parts[1];
            if (!empty($_GET) || !empty($_POST) || !empty($_FILES)) {
                $routes['parameters'] = $_REQUEST + $_FILES;
            }
        } $routes['view'] = $url_parts[0];
        return $routes;
    }

}

?>
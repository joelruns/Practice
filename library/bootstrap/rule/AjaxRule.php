<?php

namespace library\bootstrap\rule;

use \library\bootstrap\rule\DefaultRule as DefaultRule;

class AjaxRule extends DefaultRule {

    public function execute($url_parts) {
        if ($url_parts[0] == 'ajax' && !empty($url_parts[1])) {
            $url_parts[1] = ucfirst($url_parts[1]);
            $routes['model'] = $url_parts[1];
            $routes['controller'] = $url_parts[1];
            if (!empty($url_parts[2])) {
                $routes['method'] = $url_parts[2];
                if (!empty($_GET) || !empty($_POST) || !empty($_FILES)) {
                    $routes['parameters'] = $_REQUEST + $_FILES;
                }
            } $routes['view'] = 'Ajax';
            return $routes;
        }
    }

}

?>
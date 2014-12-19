<?php

namespace library\bootstrap\resource;

use \library\bootstrap\rule;

class Ruler {

    private $rules;

    public function __construct() {
        $this->rules[] = new rule\AjaxRule();
        $this->rules[] = new rule\DefaultRule();
        $this->rules[] = new rule\StaticRule();
        $this->rules[] = new rule\ErrorRule();
    }

    public function execute($url_parts) {
        foreach ($this->rules as $rule) {
            $route = $rule->execute($url_parts);
            $route = $this->buildRoute($route);
            if ($this->checkRoute($route)) {
                return $route;
            }
        }
    }
    
    private function buildRoute($route) {
        $route['model'] = '\\model\\service\\' .  (isset($route['model']) ? $route['model'] : null) . 'Service';
        $route['controller'] = '\\controller\\access\\' . (isset($route['controller']) ? $route['controller'] : null) . 'Access';
        $route['view'] = '\\view\\page\\' . (isset($route['view']) ? $route['view'] : null) . 'Page';
        return $route;
    }

    private function checkRoute($route) {
        if (class_exists($route['model']) 
                && class_exists($route['controller']) 
                && (empty($route['method']) || method_exists($route['controller'], $route['method'])) 
                && class_exists($route['view'])) {
            return true;
        } else {
            return false;
        }
    }

}

?>
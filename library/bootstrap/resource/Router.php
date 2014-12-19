<?php

namespace library\bootstrap\resource;

use \ReflectionMethod as ReflectionMethod;

class Router {

    private $ruler;
    public $route;
    
    public function __construct($url_parts) {
        $this->ruler = new Ruler();
        $this->setRoute($url_parts);
    }

    private function setRoute($url_parts) {
        $route = $this->ruler->execute($url_parts);
        if (isset($route['method'])) {
            $route['parameters'] = $this->matchParameters($route);
        } $this->route = $route;
    }
    
    private function matchParameters($route) {
        $reflector = new ReflectionMethod($route['controller'], $route['method']);
        $method_params = $reflector->getParameters();
        $matches = array();
        foreach ($method_params as $method_param) {
            $param_name = $method_param->getName();
            $param_position = $method_param->getPosition();
            //input field must have same name as method param
            if (!empty($route['parameters']) && array_key_exists($param_name, $route['parameters'])) {
                $matches[$param_position] = $route['parameters'][$param_name];
            } else if ($method_param->isOptional()) {
                $matches[$param_position] = strval($method_param->getDefaultValue());
            } else {
                $matches[$param_position] = null;
            }
        } return $matches;
    }

}

?>
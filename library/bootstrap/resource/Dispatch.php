<?php

namespace library\bootstrap\resource;

class Dispatch {

    public function execute($route, $url_parts) {
        $model = new $route['model']();
        $controller = new $route['controller']($model);
        if (!empty($route['method'])) {
            $this->runMethod($controller, $route['method'], $route['parameters']);
        } $view = new $route['view']($model, $url_parts);
        $view->output();
    }

    public function runMethod($class, $method, $parameters) {
        $callback = array($class, $method);
        call_user_func_array($callback, $parameters);
    }

}

?>
<?php

namespace library\bootstrap;

use \library\bootstrap\resource\Request as Request;
use \library\bootstrap\resource\Router as Router;
use \library\bootstrap\resource\Dispatch as Dispatch;

class Bootstrap {

    public function execute() {
        //get request
        $request = new Request();

        //parse request
        $router = new Router($request->url_parts);
        
        //dispatch routes
        $dispatch = new Dispatch();
        $dispatch->execute($router->route, $request->url_parts);
    }

}

?>

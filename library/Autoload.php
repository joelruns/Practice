<?php

namespace library;

class Autoload {

    public function __construct() {
        $function = array($this, 'execute');
        spl_autoload_extensions('.php');
        spl_autoload_register($function);
    }

    public function execute($namespace) {
        $path = explode('\\', $namespace);
        $class = array_pop($path);
        $path = '/' . implode('/', $path) . '/';
        if (is_readable(ROOT_PATH . $path . "$class.php")) {
            set_include_path(ROOT_PATH . $path);
            spl_autoload($class);
        }
    }

}

?>

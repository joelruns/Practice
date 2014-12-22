<?php

namespace controller\access;

use \controller\Controller as Controller;

class TestAccess extends Controller {

    public function __construct($model) {
        parent::__construct($model);
        $this->model->pushAddress($_SERVER['REQUEST_URI']);
    }

}

?>
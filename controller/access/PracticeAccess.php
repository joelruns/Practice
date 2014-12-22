<?php

namespace controller\access;

use \controller\Controller as Controller;

class PracticeAccess extends Controller {

    public function __construct($model) {
        parent::__construct($model);
        $this->model->pushAddress($_SERVER['REQUEST_URI']);
    }

}

?>
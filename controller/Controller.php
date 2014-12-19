<?php

namespace controller;

class Controller {

    protected $model;

    public function __construct($model) {
        $this->model = $model;
    }
    
    protected function fileInfo($input, $field = 'tmp_name', $index = null) {
        $info = $input[$field];
        if (!empty($index)) {
            $info = $info[$index];
        } return $info;
    }

}

?>

<?php

namespace view;

class View {

    protected $model;
    protected $url_parts;

    public function __construct($model = null, $url_parts = null) {
        $this->model = $model;
        $this->url_parts = $url_parts;
    }

    protected function render($type, $template) {
        include TEMPLATE_PATH . "/$type/$template.php";
    }

}

?>
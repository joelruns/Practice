<?php

namespace view\page;

use \view\View as View;
use \view\part\HeaderPart as HeaderPart;
use \view\part\FooterPart as FooterPart;

class ErrorPage extends View {

    protected $header;
    private $footer;
    protected $page;

    public function __construct($model, $url_parts) {
        parent::__construct($model, $url_parts);
        $this->header = new HeaderPart();
        $this->footer = new FooterPart();
        $this->page = 'error';
        $this->header->initialize($this->page, false);
    }

    public function output() {
        $this->header->output();
        $this->render('body', $this->page);
        $this->footer->output();
    }
    
}

?>
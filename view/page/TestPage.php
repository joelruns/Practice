<?php

namespace view\page;

use \view\View as View;
use \view\part\HeaderPart as HeaderPart;
use \view\part\FooterPart as FooterPart;

class TestPage extends View {

    protected $header;
    private $footer;
    protected $page;
    protected $total_minutes;

    public function __construct($model, $url_parts) {
        parent::__construct($model, $url_parts);
        $this->header = new HeaderPart();
        $this->footer = new FooterPart();
        $this->page = 'test';
        $this->header->initialize($this->page, false);
        $this->total_minutes = floor($model->total_time/60);
    }

    public function output() {
        $this->header->output();
        $this->render('body', $this->page);
        $this->footer->output();
    }
    
}

?>
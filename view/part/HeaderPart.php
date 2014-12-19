<?php

namespace view\part;
use \view\View as View;

class HeaderPart extends View {
    
    protected $load;
    protected $title;

    public function initialize($page, $javascript = false) {
        if ($javascript === true) {
            $this->load = $page;
        } $titles = array(
            'index' => 'Can you solve my question?',
            'test' => 'Test',
            'error' => 'Error');
        $title = "Practice | $titles[$page]";
        $this->title = $title;
    }
    
    public function output() {
        $this->render('wrapper', 'header');
    }
    
}

?>
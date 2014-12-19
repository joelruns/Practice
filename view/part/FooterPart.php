<?php

namespace view\part;
use \view\View as View;

class FooterPart extends View {
    
    public function output() {
        $this->render('wrapper', 'footer');
    }

}

?>
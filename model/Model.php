<?php

namespace model;

use \library\Session as Session;
use \library\Database as Database;

class Model {

    protected $database;

    public function __construct($session = false, $database = false) {
        if ($session === true) {
            new Session(43200, false, 64800);
        } if ($database === true) {
            $this->database = new Database('localhost', '8889', 'captions', 'root', 'root');
        }
    }

}

?>
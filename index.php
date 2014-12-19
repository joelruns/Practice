<?php

namespace library;

use \library\Autoload as Autoload;
use \library\bootstrap\Bootstrap as Bootstrap;

include $_SERVER['DOCUMENT_ROOT'] . '/library/constants.php';
include LIBRARY_PATH . '/Autoload.php';

#load library
$autoload = new Autoload();
$bootstrap = new Bootstrap();

#run bootstrap
$bootstrap->execute();

?>

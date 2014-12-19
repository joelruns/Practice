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

<!--<form action="/translate/process" method="post" enctype="multipart/form-data">
    <input name="to_lang" value="fr-FR" type="hidden"/>
    <input name="from_lang" value="en-US" type="hidden"/>
    <input name="key" value="6425800bcf326d2a74813b7a3e84711c6e516a8873d80f176e70806e69182c77" type="hidden"/>
    <input name="file" type="file"/>
    <input name="user_id" value="be40e88d77b4fb23" type="hidden"/>
    <input name="script_id" value="1" type="hidden"/>
    <input type="submit"/>    
</form>-->
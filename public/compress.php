<?php

include $_SERVER['DOCUMENT_ROOT'] . '/library/constants.php';

#variable definition
$type = $_GET['type'];
$directory = PUBLIC_PATH . "/$type/";
$file_paths = array();
$buffer = '';

#get file paths
if ($handle = opendir($directory)) {
    while (($entry = readdir($handle)) !== false) {
        if ($entry[0] != ".") {
            $file_paths[] = $directory . $entry;
        }
    } closedir($handle);
}

#build buffer
foreach ($file_paths as $file_path) {
    $buffer .= file_get_contents($file_path);
}

#clean buffer
//remove comments
$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
//clear space after colon
$buffer = str_replace(': ', ':', $buffer);
//trim whitespace
$buffer = str_replace(array("\r\n", "\r", "\n", "\t", '  ', '   ', '    '), '', $buffer);

#set headers
//gzip encoding
//ob_start("ob_gzhandler");
//enable caching
header('Cache-Control: public');
//expire in one day
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 86400) . ' GMT');
//set MIME type
header("Content-type: text/$type");

#return output
echo $buffer;

?>
<?php

#root
define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT']);

#controller
define('CONTROLLER_PATH', ROOT_PATH . '/controller');
    //access
    define('ACCESS_PATH', CONTROLLER_PATH . '/access');

#library
define('LIBRARY_PATH', ROOT_PATH . '/library');
    //bootstrap
    define('BOOTSTRAP_PATH', LIBRARY_PATH . '/bootstrap');
        //resource
        define('RESOURCE_PATH', BOOTSTRAP_PATH . '/resource');
        //rule
        define('RULE_PATH', BOOTSTRAP_PATH . '/rule');

#model
define('MODEL_PATH', ROOT_PATH . '/model');
    //domain
    define('DOMAIN_PATH', MODEL_PATH . '/domain');
    //mapper
    define('MAPPER_PATH', MODEL_PATH . '/mapper');
    //service
    define('SERVICE_PATH', MODEL_PATH . '/service');

#public
define('PUBLIC_PATH', ROOT_PATH . '/public');
    //css
    define('CSS_PATH', PUBLIC_PATH . '/css');
    //image
    define('IMAGE_PATH', PUBLIC_PATH . '/image');
    //js
    define('JS_PATH', PUBLIC_PATH . '/js');
        //specific
        define('SPECIFIC_PATH', JS_PATH . '/specific');

#view
define('VIEW_PATH', ROOT_PATH . '/view');
    //page
    define('PAGE_PATH', VIEW_PATH . '/page'); 
    //part
    define('PART_PATH', VIEW_PATH . '/part');
    //template
    define('TEMPLATE_PATH', VIEW_PATH . '/template');
        //body
        define('BODY_PATH', TEMPLATE_PATH . '/body');
        //component
        define('COMPONENT_PATH', TEMPLATE_PATH . '/component');
        //wrapper
        define('WRAPPER_PATH', TEMPLATE_PATH . '/wrapper');
    
?>
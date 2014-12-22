<?php

namespace model\mapper;

use \model\Model as Model;

class DatabaseMapper extends Mapper {

    public function __construct($model) {
        parent::__construct($model);
        $this->model->pushAddress($_SERVER['REQUEST_URI']);
    }

    public function select_tuple_length() {
    	$query = "SELECT tuple FROM blog;";
    	$result = mysql_query($query);
    	return mysql_fetch_assoc($result)["tuple"];   
    }

    public function select_blog() {
    	$query = "SELECT * FROM blog;";
    	$result = mysql_query($query);
    	return mysql_fetch_assoc($result);
    }

    public function insert_tuple($tuple) {
    	$query = "INSERT INTO blog (tuple)
    		 	  VALUES $tuple;";
    	$result = mysql_query($query);
    }

    public function insert_entry_title($title, $entry_id) {
    	$query = "INSERT INTO blog_title (title, entry_id)
    			  VALUES ($title, $entry_id);";
    	$result = mysql_query($query);
    }
}

?>
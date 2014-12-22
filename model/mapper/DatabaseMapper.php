<?php

namespace model\mapper;

use \model\Model as Model;

class DatabaseMapper extends Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function select_tuple_length() {
        $query = "AKDFJASLDFJASLDFK";
        $result = mysql_query($query);
        $results = mysql_rest...
        return $array with data
        
    }
    
    public function select_blog() {
    
    }
    
    public function insert_title
    
    public function insert_tuple
    
    
    
    

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

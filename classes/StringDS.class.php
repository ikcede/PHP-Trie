
<?php

/**
 * 
 * This class is an abstract class for all 
 * Data Structures optimized for Strings
 * 
 **/

abstract class StringDS {
	
	var $data = null;
	
	// Overrideable Constructor
	public function __construct($data = NULL) {
		$this->data = $data;
	}
	
	// Used to add values into the structure
	abstract public function add($data, $value);
	
	// Used to delete values from the structure
	abstract public function delete($data);
	
	// Finds values in the structure, returning false if not found
	abstract public function find($data);

}

?>
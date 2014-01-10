
<?php

/**
 * 
 * This class is an interface class for all 
 * Objects that can be imported and exported as JSON
 * 
 **/
 
interface JSONable {

	// Transforms an object to JSON given certain parameters
	public function toJSON($params);

	// Reconstructs the data of this structure from JSON
	public function fromJSON($data);

}

?>
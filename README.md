PHP-Trie
=========

A trie class for PHP.
If you just want the class itself, use the class in the no-dependency folder.

Testing uses TWL06.
Due to the amount of space needed, the trie cannot load all of the dictionary, so testing is limited to 100,000 of 179,000 some words.

Stats:
* It takes about 2 seconds to load all the words, slice the array, and add them into the trie.
* The trie takes up about 81750112 bytes of memory
* The sliced array itself takes up about 18119448 bytes

Clearly, the trie requires a lot of memory. 
We could further test it using Objects instead of arrays, though there are already many easily Googleable tries that use Object nodes.

Documentation
---------

The trie supports the basic functions of add, find, and delete.

Functions:
* 	__Constructor__ -
	_params_ - $data (optional): Another trie
	
	By default, making a new Trie() will create an empty trie.
	If you want to make a deep copy, you can use the data from the copied Trie as a parameter
	
* 	__add__ -
	_params_ - $data: A String value, $value (optional): the value stored for this string, default NULL
	_return_ - true if a word is added in or if a value is changed, false if the word/value already exists
	
	Adds a value into the trie. Ex. $trie->add("word");
	
*	__find__ -
	_params_ - $data: A String value
	_return_ - true if the value is found in the trie, false if not
	
	Searches for a value in the trie. Ex. $trie->find("word");
	
*	__delete__ -
	_params_ - $data: A String value
	_return_ - true if the value is deleted, false if not found
	
	Deletes a value in the trie. Ex. $trie->delete("word");
	
*	__getVal__ -
	_params_ - $data: A String value
	_return_ - a mixed value
	
	Like find but returns the value at that word or false if the word is not found.
	Ex. $trie->getVal("word") returns null (by default) if "word" is found in the trie.

* 	__listWords__ -
	_params_ - $prefix (optional): A String value, default ""
	_return_ - an array of words
	
	Does a pre-order transversal of the trie starting at the node dictated by $prefix
	By default returns all the words in the trie sorted alphabetically
	Ex. If a $trie has two words: "word" and "wow"
	
	$trie->listWords() returns array("word","wow")
	$trie->listWords("wo") returns the same
	$trie->listWords("wow") returns array("wow")
	$trie->listWords("a") returns an empty array

*	__toJSON__ -
	_params_ - $params (optional): parameters to give to json_encode
	_return_ - A String JSON of the trie
	
*	__fromJSON__ -
	_params_ - $data: A JSON trie as a String
	
	Converts the current trie into the one stored by the JSON (overwrites info)

<?php 

namespace ImEx\Models\Entities\Countries;

abstract class Country {
	
	private $_name;

	public function __construct($name) {
		$this->_name = $name;
	}

	public function getName() {
		return $this->_name;
	}

}
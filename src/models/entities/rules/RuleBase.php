<?php 

namespace ImEx\Models\Entities\Rules;

class RuleBase extends Rule {
	private $_name;

	public function __construct($name) {
		$this->_name = $name;
	}

	public function run() {
		echo "\n $this->_name ";
	}
}
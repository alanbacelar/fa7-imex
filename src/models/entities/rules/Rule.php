<?php 

namespace ImEx\Models\Entities\Rules;

class Rule extends AbstractRule {
	private $_id;
	private $_status;

	public function __construct($id, $status) {
		$this->_id = $id;
		$this->_status = $status;
	}

	public function check() {
		return $this->_status;
	}
}
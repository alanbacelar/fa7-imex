<?php 
namespace ImEx\Models\Entities\Rules;

abstract class Rule implements Contracts\RuleContract {
	private $_next;

	public function process() {
		$this->run();

		if ($this->getNext()) {
			return $this->getNext()->process();
		}

		return "done";
	}

	public function setNext(Rule $next) {
		$this->_next = $next;
	}

	public function getNext() {
		return $this->_next;
	}
}
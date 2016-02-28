<?php 
namespace ImEx\Models\Entities\Rules;

abstract class AbstractRule implements Contracts\RuleContract {
	private $_next;

	public function process() {
		$isValid = $this->check();

		if ($isValid && $this->getNext()) {
			return $this->getNext()->process();
		}

		return $isValid;
	}


	public function setNext(Rule $next) {
		$this->_next = $next;
	}

	public function getNext() {
		return $this->_next;
	}
}
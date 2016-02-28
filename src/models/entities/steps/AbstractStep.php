<?php 
namespace ImEx\Models\Entities\Steps;

abstract class AbstractStep implements Contracts\StepContract {
	private $_next;

	public function process() {
		$this->check();

		if ($this->getNext()) {
			return $this->getNext()->process();
		}
	}


	public function setNext(Step $next) {
		$this->_next = $next;
	}

	public function getNext() {
		return $this->_next;
	}
}
<?php 

namespace ImEx\Models\Entities\Process;

use ImEx\Models\Entities\Steps\Step;

abstract class Process {
	protected $_steps;

	public function __construct(array $steps) {
		$this->_steps = $steps;
	}

	public function getSteps() {
		return $this->_steps;
	}
}
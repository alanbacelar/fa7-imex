<?php 

namespace ImEx\Models\Entities;

use ImEx\Models\Entities\Rules\RuleBase as Rule;

class Step {
	private $_rules;
	private $_instances = [];

	public function __construct(array $rules) {
		$this->_rules = $rules;
		$this->build();
	}

	private function build() {
        $this->createInstances();
        $this->setNextOfEachInstance();
	}

	private function createInstances() {
		foreach ($this->_rules as $rule) {
        	 $this->_instances[] = new Rule($rule);
        }
	}

	private function setNextOfEachInstance() {
		foreach ($this->_instances as $key => $rule) {
        	$next = ($key + 1);

        	if (isset($this->_instances[$next])) {
        		$this->_instances[$key]->setNext($this->_instances[$next]);
        	}
        }
	}

	public function process() {
		if (isset($this->_instances[0])) {
			$this->_instances[0]->process();
			return true;
		}

		return false;
	}

}
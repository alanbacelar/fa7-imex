<?php 

namespace ImEx\Models\Entities\Steps;

use ImEx\Models\Entities\Rules\Rule as Rule;

class Step extends AbstractStep {
	private $_id;
	private $_ruleRepository;
	private $rules;

	public function __construct($id, array $rules) {
		$this->_id = $id;
		$this->_rules = $rules;
	}

	private function isInvalidRule(Rule $rule) {
		return !$rule->check();
	}

	public function getInvalidRules() {
		return array_filter($this->_rules, array($this, 'isInvalidRule'));
	}

	public function check() {
		$invalidRules = $this->getInvalidRules();
		return (sizeof($invalidRules) == 0);
	}
}
<?php 

namespace ImEx\Models\Entities\Rules;

use ImEx\Models\Entities\Rules\Rule;

class RuleBuilder {
	private $_rules = [];

	public function addRules(array $rules) {
		$this->_rules = $rules;
	}

	public function addRule(Rule $rule) {
		$this->rules[] = $rule;
	}

	public function build() {
		foreach ($this->_rules as $key => $rule) {
        	$next = ($key + 1);

        	if (isset($this->_rules[$next])) {
        		$this->_rules[$key]->setNext($this->_rules[$next]);
        	}
        }

        return isset($this->_rules[0]) ? $this->_rules[0] : null;
	}
}
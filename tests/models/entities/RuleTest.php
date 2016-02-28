<?php

use ImEx\Models\Entities\Rules\Rule as Rule;
use ImEx\Models\Entities\Rules\RuleBuilder as RuleBuilder;

class RuleTest extends PHPUnit_Framework_TestCase
{
    private $_buider;

    protected function setUp() {
        $this->_buider = new RuleBuilder();
    }

    public function testRuleSuccessChain()
    {
        $this->_buider->addRules([
            new Rule(1, true),
            new Rule(2, true),
            new Rule(3, true),
            new Rule(4, true)
        ]);

        $rule = $this->_buider->build();
        $this->assertTrue($rule->process());
    }

    public function testRuleFailChain()
    {
        $this->_buider->addRules([
            new Rule(1, true),
            new Rule(2, true),
            new Rule(3, false),
            new Rule(4, true)
        ]);

        $rule = $this->_buider->build();
        $this->assertFalse($rule->process());
    }
}

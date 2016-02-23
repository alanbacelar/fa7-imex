<?php

use ImEx\Models\Entities\Rules as Rules;

class RuleTest extends PHPUnit_Framework_TestCase
{

    public function testRule()
    {
        $rule = new Rules\RuleBase("Base");
        $rule1 = new Rules\RuleBase("Rule1");
        $rule2 = new Rules\RuleBase("Rule2");

        $rule->setNext($rule1);
        $rule1->setNext($rule2);

        $this->assertEquals('done', $rule->process());
    }
}

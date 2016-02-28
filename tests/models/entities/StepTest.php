<?php

use ImEx\Models\Entities\Steps\Step as Step;
use ImEx\Models\Entities\Rules\Rule as Rule;

class StepTest extends PHPUnit_Framework_TestCase
{
    public function testCheckSuccessStep()
    {
        $rules = [
            new Rule(1, true), 
            new Rule(2, true)
        ];

        $step = new Step(1, $rules);
        $this->assertTrue($step->check());
    }

    public function testCheckFailStep()
    {
        $rules = [
            new Rule(1, true), 
            new Rule(2, false),
            new Rule(2, true)
        ];

        $step = new Step(1, $rules);
        $this->assertFalse($step->check());
    }

    public function testRulesFromFailStep()
    {
        $rule1 = new Rule(1, false);
        $rule2 = new Rule(2, false);
        $rule3 = new Rule(3, true);

        $step = new Step(1, [$rule1, $rule2, $rule3]);
        $this->assertEquals([$rule1, $rule2], $step->getInvalidRules());
    }
}

<?php

use ImEx\Models\Entities\Step as Step;

class StepTest extends PHPUnit_Framework_TestCase
{

    public function testStep()
    {
    	echo "\n==================";

    	$rules = [
    		"Step-Rule1",
    		"Step-Rule2",
    		"Step-Rule3"
    	];

        $step = new Step($rules);
        $this->assertEquals(true, $step->process());
    }

    public function testStepAnotherOrder()
    {
    	echo "\n==================";

    	$rules = [
    		"Step-Rule1",
    		"Step-Rule3",
    		"Step-Rule2"
    	];

        $step = new Step($rules);
        $this->assertEquals(true, $step->process());
    }
}

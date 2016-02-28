<?php

use ImEx\Models\Entities\Products\Arroz as Arroz;
use ImEx\Models\Entities\Countries\Brazil as Brazil;
use ImEx\Models\Entities\Process\Export as Export;

use ImEx\Models\Entities\Steps\Step as Step;
use ImEx\Models\Entities\Rules\Rule as Rule;

use ImEx\Models\Repositories\StepsRepository as StepsRepository;

class ExportTest extends PHPUnit_Framework_TestCase
{
	private $_process;
	private $_product;
	private $_country;
    private $_repository;

    protected function setUp() {
        $this->_repository = new StepsRepository();

        $this->_product = new Arroz();
    	$this->_country = new Brazil();

        $rules = [
            new Rule(1, true), 
            new Rule(2, true)
        ];

        $steps = [
            new Step(1, $rules),
            new Step(2, $rules)
        ];

        $this->_process = new Export($steps);
    }

    public function testProcessStepsLength() {
        $steps = $this->_process->getSteps();
    	$this->assertEquals(2, sizeof($steps));
    }

    public function testExportCheckFirstStep() {
        $steps = $this->_process->getSteps();
    	$this->assertTrue($steps[0]->check());
    }
}

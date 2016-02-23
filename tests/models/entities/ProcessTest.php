<?php

use ImEx\Models\Entities\Process as Process;

class ProcessTest extends PHPUnit_Framework_TestCase
{

    public function testProcess()
    {
        $process = new Process\Process();
        $this->assertEquals('imported', $process->import());
    }
}

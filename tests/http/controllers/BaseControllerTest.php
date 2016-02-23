<?php

class BaseControllerTest extends PHPUnit_Framework_TestCase
{
    private static $controller;

    public static function setUpBeforeClass()
    {
        self::$controller = new ImEx\Http\Controllers\BaseController();
    }

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testControllerRenderView()
    {
        $this->assertEquals('Hello, ImEx', self::$controller->index());
    }
}

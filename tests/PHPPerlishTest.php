<?php

require_once 'PHP/Perlish.php';


class PHPPerlishTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
    }

    public function testLoadFunction()
    {
        $function = 'qw';

        $this->assertFalse(function_exists($function), 'function '.$function.' is already exists.');
        $ret = PHP_Perlish::loadFunction($function);
        $this->assertTrue($ret, 'failed load function.');
        $this->assertTrue(function_exists($function), 'failed load function.');

        $function = 'dummy';

        $this->assertFalse(function_exists($function), 'function '.$function.' is already exists.');
        $ret = PHP_Perlish::loadFunction($function);
        $this->assertFalse($ret, 'load not exists function.');
        $this->assertFalse(function_exists($function), 'load not exists function.');
    }
}

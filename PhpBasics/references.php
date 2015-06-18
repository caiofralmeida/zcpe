<?php

class ReferencesTest extends PHPUnit_Framework_TestCase
{
    public function testReferenceBasic()
    {
        $b = 10;
        $a = &$b;
        $b = 20;

        $this->assertEquals(20, $a);
    }

    public function testReferenceFunction()
    {
        $b = 10;

        $func = function(&$b) {
            $b = $b * 2;
        };

        $func($b);

        $this->assertEquals(20, $b);
    }

    public function testForeachReference()
    {
        $data = range(1, 5);

        foreach ($data as $key => &$value) {
            $value = 1;
        }

        $this->assertEquals(array(1,1,1,1,1), $data);
    }

    public function testStringReferenceArgument()
    {
        $func = function(&$bar) {
            $bar = "concat";
        };

        $func($arg = "ttt");

        $this->assertEquals('ttt', $arg);

    }
}

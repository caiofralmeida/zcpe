<?php

class BooleanTest extends PHPUnit_Framework_TestCase
{
    public function provedorFalseValues()
    {
        return array(
            array(false),
            array(0),
            array(0.0),
            array(""),
            array("0"),
            array(array()),
            array(null)
        );
    }

    public function provedorTrueValues()
    {
        return array(
            array(-1),
            array(1),
            array(0.1),
            array(" "),
            array("00"),
            array(array(1))
        );
    }

    /**
     * @dataProvider provedorFalseValues
     */
    public function testCastToBooleanFalseValues($data)
    {
        $data = (boolean) $data;

        $this->assertFalse($data);
    }

    /**
     * @dataProvider provedorTrueValues
     */
    public function testCastToBooleanTrueValues($data)
    {
        $data = (boolean) $data;

        $this->assertTrue($data);
    }
}

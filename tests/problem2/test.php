<?php

namespace tuentiChallenge\problem2;

use PHPUnit\Framework\TestCase;

class WaffleRectCalculatorTest extends TestCase
{
    public function testconvertToBase10()
    {
        $calulator = new HiddenNumbersCalculator("bfd");
        $n = $calulator->convertToBase10("102");
        $this->assertEquals($n, 11);
    }

	/**
     * @expectedException ErrorException
     */
	public function testException()
    {
    	$calulator = new HiddenNumbersCalculator("a");
        $this->expectException(ErrorException::class);
    }

    /**
     * @expectedException ErrorException
     */
    public function testException2()
    {
        $calulator = new HiddenNumbersCalculator("abcdefghijklamnopqrstuvxyzz");
        $this->expectException(ErrorException::class);
    }

    public function testEquals()
    {
        $calulator = new HiddenNumbersCalculator("bdf");
        $resultDiff = $calulator->solve();

        $this->assertEquals($resultDiff, 10);
    }

    public function testEqualsCase2()
    {
        $calulator = new HiddenNumbersCalculator("xwyz");
        $resultDiff = $calulator->solve();

        $this->assertEquals($resultDiff, 10);
    }

    public function testEqualsCase3()
    {
        $calulator = new HiddenNumbersCalculator("qwerty");
        $resultDiff = $calulator->solve();

        $this->assertEquals($resultDiff, 36445);
    }
   
}
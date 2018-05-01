<?php

namespace tuentiChallenge\problem1;

use PHPUnit\Framework\TestCase;

class WaffleRectCalculatorTest extends TestCase
{
	/**
     * @expectedException ErrorException
     */
	public function testException()
    {
    	$calulator = new WaffleRectCalculator(1,1,2);
        $this->expectException(ErrorException::class);
    }

    public function testEquals()
    {
    	$calulator = new WaffleRectCalculator(1,2,2);
    	$resutlcaseNumber1 = $calulator->solve();

        $this->assertEquals($resutlcaseNumber1, 1);
    }

    public function testEqualsCase2()
    {
    	$calulator = new WaffleRectCalculator(1,3,2);
    	$resutlcaseNumber1 = $calulator->solve();

        $this->assertEquals($resutlcaseNumber1, 2);
    }

    public function testEqualsCase3()
    {
    	$calulator = new WaffleRectCalculator(1,4,3);
    	$resutlcaseNumber1 = $calulator->solve();

        $this->assertEquals($resutlcaseNumber1, 6);
    }

    public function testEqualsCase4()
    {
    	$calulator = new WaffleRectCalculator(1,3,3);
    	$resutlcaseNumber1 = $calulator->solve();

        $this->assertEquals($resutlcaseNumber1, 4);
    }

   
}
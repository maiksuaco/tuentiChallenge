<?php

namespace tuentiChallenge\problem1;

use PHPUnit\Framework\TestCase;

class OutputPrinterTest extends TestCase
{
    public function testEquals()
    {
    	$calulator = new WaffleRectCalculator(1,2,2);
        $printer = new OutputPrinter(1, $calulator);

        $this->assertEquals($printer->printCase(), "Case #1: 1\n");
    }
   
}
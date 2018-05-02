<?php

namespace tuentiChallenge\problem2;

use PHPUnit\Framework\TestCase;
use tuentiChallenge\common\OutputPrinter;

class OutputPrinterTest extends TestCase
{
    public function testEquals()
    {
    	$calulator = new HiddenNumbersCalculator("bdf");
        $printer = new OutputPrinter(1, $calulator);

        $this->assertEquals($printer->printCase(), "Case #1: 1\n");
    }
   
}
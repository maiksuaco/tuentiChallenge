<?php

namespace tuentiChallenge\problem1;

use tuentiChallenge\common\OutputPrinter;

/**
* 
*/
class Executor
{
    private $inputFile;
    private $outputFile = __DIR__.'/testOuput.txt';
    
    function __construct(string $inputFile)
    {
        $this->inputFile = file(__DIR__.'/'.$inputFile);
    }

    public function execute():void {
       
        array_shift($this->inputFile);

        $result = "";
       
        foreach ($this->inputFile as $caseNumber => $cantLines) {

            $confLines = explode(" ", $cantLines);
            $verticals = $confLines[0];
            $horizontals = $confLines[1];

            $caseNumber++;
            $problem = new WaffleRectCalculator(intval($caseNumber), intval($verticals), intval($horizontals));
            $printer = new OutputPrinter($caseNumber, $problem);

            $result .= $printer->printCase();
        }

        file_put_contents($this->outputFile, $result);
    }
}


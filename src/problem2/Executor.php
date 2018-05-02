<?php

namespace tuentiChallenge\problem2;

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
        $caseNumber = 1;
       
        foreach ($this->inputFile as $case) {

            $problem = new HiddenNumbersCalculator();
            $printer = new OutputPrinter($caseNumber, $problem);

            $caseNumber++;

            $result .= $printer->printCase();
        }

        file_put_contents($this->outputFile, $result);
    }
}


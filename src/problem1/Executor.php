<?php

namespace tuentiChallenge\problem1;

/**
* 
*/
class Executor
{
    private $totalCases;
    private $inputFile;
    private $outputFile = __DIR__.'/testOuput.txt';
    
    function __construct(string $inputFile)
    {
        $this->inputFile = file(__DIR__.'/'.$inputFile);
        $this->totalCases = intval($this->inputFile[0]);    

        #var_dump($this);
        #var_dump($file);
    }

    public function execute():void {
       
        array_shift($this->inputFile);
       
        foreach ($this->inputFile as $caseNumber => $cantLines) {

            $confLines = explode(" ", $cantLines);
            $verticals = $confLines[0];
            $horizontals = $confLines[1];

            $caseNumber++;
            $problem = new WaffleRectCalculator(intval($caseNumber), intval($verticals), intval($horizontals));
            $printer = new OutputPrinter($caseNumber, $problem);

            $result .= $printer->printCase();
        }

        echo $result;
        file_put_contents($this->outputFile, $result);
    }
}


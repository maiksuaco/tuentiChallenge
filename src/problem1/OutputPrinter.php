<?php

namespace tuentiChallenge\problem1;

/**
* 
*/
class OutputPrinter
{
    private $caseNumber;
    private $problem;
    
    public function __construct(int $caseNumber, Problem $problem)
    {
        $this->caseNumber = $caseNumber;
        $this->problem = $problem;
    }

    public function printCase():string {
        
        return sprintf("Case #%d: %d\n", $this->caseNumber, $this->problem->solve());
    }
}

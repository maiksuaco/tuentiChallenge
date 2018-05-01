<?php

namespace tuentiChallenge\problem1;

use tuentiChallenge\common\Problem;

/**
* 
*/
class WaffleRectCalculator implements Problem
{
    private $caseNumber;
    private $cantLinesVertical;
    private $cantLinesHorizontal;
    
    public function __construct(int $caseNumber, int $cantLinesVertical, int $cantLinesHorizontal)
    {
        if(!(1 <= $caseNumber && 100 >= $caseNumber)) {

            throw new \ErrorException("Wrong caseNumber", 1);      

        }

        if(!(2 <= $cantLinesVertical && 10000 >= $cantLinesVertical)) {

            throw new \ErrorException("Wrong cantLinesVertical", 2);        

        }

        if(!(2 <= $cantLinesHorizontal && 10000 >= $cantLinesHorizontal)) {

            throw new \ErrorException("Wrong cantLinesHorizontal", 3);

        }

        $this->caseNumber = $caseNumber;
        $this->cantLinesVertical = $cantLinesVertical;
        $this->cantLinesHorizontal = $cantLinesHorizontal;
    }

    public function getCaseNumber(){
        return $this->caseNumber;
    }

    public function solve():int {
        
        return ($this->cantLinesVertical-1)*($this->cantLinesHorizontal-1);
    }
}

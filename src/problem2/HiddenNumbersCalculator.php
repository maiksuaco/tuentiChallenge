<?php

namespace tuentiChallenge\problem2;

use tuentiChallenge\common\Problem;

/**
* 
*/
class HiddenNumbersCalculator implements Problem
{
	private $encryptedText;

	public function __construct(string $encryptedText) {
		$this->encryptedText = $encryptedText;

		if(!(2 <= strlen($this->encryptedText) && 26 >= strlen($this->encryptedText))) {

            throw new \ErrorException("Wrong length of the encryptedText", 1);
        }
	}

	public function solve():int {

		return 1;
	}

	public function convertToBase10(int $numberInBaseN) {
		return base_convert((string)$numberInBaseN, strlen($numberInBaseN), 10);
	}
}


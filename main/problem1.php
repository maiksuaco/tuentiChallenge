<?php

use tuentiChallenge\problem1\Executor;

require __DIR__.'/../vendor/autoload.php';

$e = new Executor("testInput.txt");
$e->execute();
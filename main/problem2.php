<?php

use tuentiChallenge\problem2\Executor;

require __DIR__.'/../vendor/autoload.php';

$e = new Executor("testInput.txt");
$e->execute();
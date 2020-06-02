<?php
require_once './FailedException.php';
require_once './SuccessException.php';

$test = new FailedException;
$test->print();

// $test = new SuccessException;
// $test->print();


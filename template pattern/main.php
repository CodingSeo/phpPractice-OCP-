<?php
require_once './FailedException.php';
require_once './SuccessException.php';

/**
 * template pattern을 사용
 */
$test = new FailedException;
$test->print();

// $test = new SuccessException;
// $test->print();


<?php
require_once './ExceptionPrinter.php';

class FailedException extends ExceptionPrinter
{
    protected function printWithItem(){
        echo("Fail\n");
    }
}

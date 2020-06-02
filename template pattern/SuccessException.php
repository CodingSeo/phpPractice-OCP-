<?php
require_once './ExceptionPrinter.php';

class SuccessException extends ExceptionPrinter
{
    protected function printWithItem(){
        echo("success\n");
    }
}

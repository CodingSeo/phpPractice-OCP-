<?php

abstract class ExceptionPrinter
{
    private $code;
    final public function print()
    {
        $this->startMessage();
        $this->printWithItem();
        $this->printCode();
    }
    abstract protected function printWithItem();
    final protected function startMessage(){
        echo("start\n");
    }
    final protected function printCode()
    {
        echo ("ref\n");
    }
}

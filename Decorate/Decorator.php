<?php
require_once './RenderInterface.php';
abstract class Decorator implements RenderInterface{
    protected $wapper;

    public function __construct(RenderInterface $wapperable)
    {
        $this->wapper = $wapperable;
    }
}
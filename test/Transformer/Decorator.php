<?php
abstract class Decorator implements Transformer{
    protected $wapper;

    public function __construct(RenderInterface $wapperable)
    {
        $this->wapper = $wapperable;
    }
}
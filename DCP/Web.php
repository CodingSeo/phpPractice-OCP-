<?php
class Web implements RenderInterface{
    protected $data;
    public function __construct($data)
    {
        $this ->data = $data;
    }
    public function render(){
        return $this->data;
    }
}
<?php
class Web implements Transformer{
    protected $data;
    public function __construct($data)
    {
        $this ->data = $data;
    }
    public function render(){
        return $this->data;
    }
}
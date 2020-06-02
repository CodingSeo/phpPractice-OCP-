<?php

class XML extends Transformer{
    public function render(){
        $output = $this->wapper->render();
        $doc = new \DOMDocument();
        foreach ($output as $key => $val) {
            $doc->appendChild($doc->createElement($key, $val));
        }
        return $doc->saveXML();
    }
}
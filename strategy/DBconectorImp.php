<?php
namespace PHP;
require './DBconnector.php';
class DBconnectorImp implements DBconnector{
    public function connect(){
        return 'connected';
    }
}
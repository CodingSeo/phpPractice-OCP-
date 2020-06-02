<?php
namespace PHP;
require './ServiceProvider.php';
class ServiceProviderImp implements ServiceProvider{
    public function getName(){
        return 'getName';
    }
}
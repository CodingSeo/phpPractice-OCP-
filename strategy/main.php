<?php
namespace PHP;
require './User.php';
require './DBconectorImp.php';
require './ServiceProviderImp.php';

$user = new User(new DBconnectorImp,new ServiceProviderImp);
$user->shout();

<?php
/**
 * strategy패턴을 사용하여 변화하는 것과 변화하지 않는것을 구별하여 구현한다.
 * 
 */


namespace PHP;
require './User.php';
require './DBconectorImp.php';
require './ServiceProviderImp.php';

$user = new User(new DBconnectorImp,new ServiceProviderImp);
$user->shout();

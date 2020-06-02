<?php
require_once './JSON.php';
require_once './XML.php';
require_once './Web.php';

/**
 * 
 */

$t = new Web(array('foo'=>'bar'));
echo(json_encode($t ->render())."\n");
$t = new XML($t);
echo($t->render()."\n");
// $Jt = new JSON($t);
// echo($Jt->render());

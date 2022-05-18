<?php
$myObj = new stdClass();
$myObj->name = "dini";
$myObj->age = 23;
$myObj->city = "surabaya";

$myJSON = json_encode($myObj);

echo $myJSON;

<?php
$jsonobj = '{"dini":23,"rina":19,"jihan":21}';

$obj = json_decode($jsonobj);

echo $obj->dini;
echo $obj->rina;
echo $obj->jihan;
?>
<?php
$jsonobj = '{"dini":23,"rina":19,"jihan":21}';

$arr = json_decode($jsonobj, true);

echo $arr["dini"];
echo $arr["rina"];
echo $arr["jihan"];
?>
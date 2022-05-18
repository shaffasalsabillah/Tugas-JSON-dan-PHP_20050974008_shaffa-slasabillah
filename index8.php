<?php
$jsonobj = '{"dini":23,"rina":19,"jihan":21}';

$arr = json_decode($jsonobj, true);

foreach($arr as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>
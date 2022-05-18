<?php
$jsonobj = '{"dini":23,"rina":19,"Jihan":21}';

$obj = json_decode($jsonobj);

foreach($obj as $key => $value) {
  echo $key . " => " . $value . "<br>";
}
?>
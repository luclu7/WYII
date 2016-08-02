<?php

date_default_timezone_set('Europe/London');
$api = date("Y");
$result = array("year" => $api);
$json = json_encode($result);
echo $json;

?>

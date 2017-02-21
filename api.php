<?php

date_default_timezone_set('Europe/Paris');
$api = date("Y");
$result = array("year" => $api);
$json = json_encode($result);
echo $json;

?>

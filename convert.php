<?php
$result = array('text'=>'Hello.');
header('Content-type:application/json; charset=utf8');
echo json_encode($result);

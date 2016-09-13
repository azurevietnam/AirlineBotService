<?php
header("Content-Type: application/json");
$response = array('name' => $name);
echo json_encode($response);
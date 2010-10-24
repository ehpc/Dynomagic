<?php

$data = json_decode($_POST["data"]);
$lines = $data->myField1."\n".$data->myField2."\n";
file_put_contents("db.txt", $lines);

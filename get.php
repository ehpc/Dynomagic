<?php
$lines = file_get_contents("db.txt");
$lines = explode("\n", $lines);
$res = (object)array("db" => 
    (object)array("myTable" => 
        (object)array("myField1" => $lines[0], 
                      "myField2" => $lines[1])));
$res = json_encode($res);
header('Content-type: application/json');
echo $res;


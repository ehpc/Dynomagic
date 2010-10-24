<?php

$res = (object)array("db" => 
    (object)array("myTable" => 
        (object)array("myField1" => "myValue1", 
                      "myField2" => "myValue2")));
$res = json_encode($res);
header('Content-type: application/json');
echo $res;

// Outputs this:
// {"db":{"myTable":{"myField1":"myValue1","myField2":"myValue2"}}}

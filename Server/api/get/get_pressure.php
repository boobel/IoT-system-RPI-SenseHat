<?php

    header("Content-type: application/json; charset=UTF-8");

    $method = $_SERVER['REQUEST_METHOD'];
    if ($method == "GET"){
        $output = file_get_contents("../src/data/pressure.dat");
        http_response_code(200);
        echo $output;
    }
    else{
        http_response_code(400);
    }
    
?>
<?php

$input = "======================================================================\r\n";

$input.= file_get_contents('php://input');


$f = fopen("data1970.txt", "ab+");
     fwrite($f, $input);
     fclose($f);


print '{"status": "success", "message": "Input Received"}\n';
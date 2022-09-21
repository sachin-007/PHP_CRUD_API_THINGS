<?php



$data = file_get_contents("https://jsonplaceholder.typicode.com/albums", true);

var_dump($data);

print_r($http_response_header);
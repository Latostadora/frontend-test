<?php


$rand = mt_rand(0,1);
$id = filter_input(INPUT_POST,'id', FILTER_VALIDATE_INT);
if (!is_numeric($id)) {
    http_response_code(400);
    die;
}
if ($rand === 1) {
    http_response_code(201);
} else {
    http_response_code(500);
}

die;
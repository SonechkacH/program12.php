<?php
header('Content-Type: text/html; charset=utf-8');
if($_SERVER['REQUEST_METHOD']=='POST' && $_SERVER["CONTENT-TYPE"]=='application/json'){
    $postData = file_get_contents('php://input');
    $data = json_decode($postData, true);
    echo json_encode($data);
}

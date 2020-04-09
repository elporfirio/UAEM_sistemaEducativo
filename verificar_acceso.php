<?php

session_start();
$entityBody = file_get_contents('php://input');
$receivedData = json_decode($entityBody);

if (isset($receivedData->password) && $receivedData->password != '') {
    $_SESSION["activeSession"] = true;
    echo json_encode(["success" => true]);
} else {
    echo json_encode(["success" => false]);
    http_response_code(403);
}

<?php

session_start();

if(!$_SESSION["activeSession"]) {
    http_response_code(403);
    return json_encode(["success" => false, "error" => "No active session"]);
}

$typeSearch = filter_var($_GET["typeSearch"], FILTER_SANITIZE_STRING);

if($typeSearch === 'all'){
    $query = "SELECT * FROM subject LIMIT 500";
}

$link = mysqli_connect("localhost", "root", "root", "sistema_educativo");
mysqli_select_db($link, "sistema_educativo");
$queryResult = mysqli_query($link, $query);

if (!$queryResult) {
    $error = mysqli_error($link);
    $nerror = mysqli_errno($link);
    echo json_encode(['success' => false, 'error' => $error]);
} else {
    for ($set = array (); $row = $queryResult->fetch_assoc(); $set[] = $row);
    echo json_encode(['success' => true, 'result' => $set]);
}
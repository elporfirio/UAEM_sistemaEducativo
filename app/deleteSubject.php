<?php
session_start();

if (!$_SESSION["activeSession"]) {
    http_response_code(403);
    return json_encode(["success" => false, "error" => "No active session"]);
}

if ($_SERVER['REQUEST_METHOD'] != 'DELETE') {
    echo json_encode(['success' => false, 'result' => 'INVALID METHOD']);
}

$id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);
$query = "DELETE FROM subjects WHERE id = $id";

$link = mysqli_connect("localhost", "root", "root", "sistema_educativo");
mysqli_select_db($link, "sistema_educativo");
$queryResult = mysqli_query($link, $query);

if (!$queryResult) {
    $error = mysqli_error($link);
    $nerror = mysqli_errno($link);
    echo json_encode(['success' => false, 'error' => $error]);
} else {
    echo json_encode(['success' => true]);
}

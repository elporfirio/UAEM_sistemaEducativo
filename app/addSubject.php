<?php

session_start();
$entityBody = file_get_contents('php://input');
$receivedData = json_decode($entityBody);

$code = filter_var($receivedData->code, FILTER_SANITIZE_STRING);
$name = filter_var($receivedData->name, FILTER_SANITIZE_STRING);
$credits = filter_var($receivedData->credits, FILTER_SANITIZE_STRING);
$studyPlan = filter_var($receivedData->studyPlan, FILTER_SANITIZE_STRING);
$comments = filter_var($receivedData->comments, FILTER_SANITIZE_STRING);

//datos de la consulta
$query = "INSERT INTO subject (code, name, credits, study_plan, comments ) VALUES ('$code','$name','$credits','$studyPlan', '$comments')";

//se hace la consulta
$link = mysqli_connect("localhost", "root", "root", "sistema_educativo");

//aqui la base de datos, se crea con PHPmyAdmin
mysqli_select_db($link, "sistema_educativo");
$queryResult = mysqli_query($link, $query);

//errores por si los hay
if (!$queryResult) {
    $error = mysqli_error($link);
    $nerror = mysqli_errno($link);
    echo json_encode(['success' => false, 'error' => $error]);
} else {
    echo json_encode(['success' => true]);
}

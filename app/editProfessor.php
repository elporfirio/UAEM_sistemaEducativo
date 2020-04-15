<?php

session_start();
$entityBody = file_get_contents('php://input');
$receivedData = json_decode($entityBody);

$id = filter_var($_GET['id'], FILTER_SANITIZE_STRING);

$curp = filter_var($receivedData->curp, FILTER_SANITIZE_STRING);
$name = filter_var($receivedData->name, FILTER_SANITIZE_STRING);
$secondName = filter_var($receivedData->secondName, FILTER_SANITIZE_STRING);
$motherName = filter_var($receivedData->motherName, FILTER_SANITIZE_STRING);
$birthDate = filter_var($receivedData->birthDate, FILTER_SANITIZE_STRING);
$sex = filter_var($receivedData->sex, FILTER_SANITIZE_STRING);
$maritalStatus = filter_var(
    $receivedData->maritalStatus,
    FILTER_SANITIZE_STRING
);
$profession = filter_var($receivedData->profession, FILTER_SANITIZE_STRING);
$professionalId = filter_var(
    $receivedData->professionalId,
    FILTER_SANITIZE_STRING
);
$email = filter_var($receivedData->email, FILTER_SANITIZE_EMAIL);
$phone = filter_var($receivedData->phone, FILTER_SANITIZE_STRING);

//datos de la consulta
$query = "UPDATE professor SET curp='$curp', name='$name', secondName='$secondName', motherName='$motherName', birthDate='$birthDate', sex='$sex', maritalStatus='$maritalStatus', profession='$profession', professionalId='$professionalId', email='$email', phone='$phone' WHERE idprofessor='$id'";

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

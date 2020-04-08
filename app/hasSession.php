<?php

session_start();

if (isset($_SESSION["activeSesion"])) {
    echo json_encode(["success" => true]);
} else {
    http_response_code(403);
}

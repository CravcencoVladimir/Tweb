<?php
session_start();

$valid_username = "admin";
$valid_password = "1234";

$response = ["success" => false, "message" => "Неверный логин или пароль"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"] ?? "";
    $password = $_POST["password"] ?? "";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION["user"] = $username;
        $response["success"] = true;
        $response["message"] = "Успешный вход";
    }
}

header("Content-Type: application/json");
echo json_encode($response);
?>

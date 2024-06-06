<?php
require_once "../partials/connection.php";
$_POST = json_decode(file_get_contents("php://input"), true);

if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $id = htmlspecialchars($_POST['id']);

    if (empty($name)) {
        echo json_encode([
            "nameError" => "Name is required from PHP!"
        ]);
    } elseif (empty($email)) {
        echo json_encode([
            "emailError" => "Email is required from PHP!"
        ]);
    } else {
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' AND `id` <> $id;";
        $result = $conn->query($sql);

        if ($result->num_rows === 0) {
            $sql = "UPDATE `users` SET `name` = '$name', `email` = '$email' WHERE `id` = $id;";
            if ($conn->query($sql)) {
                echo json_encode([
                    "success" => "Magic has been spelled!"
                ]);
            } else {
                echo json_encode([
                    "failure" => "Magic has failed to spell!"
                ]);
            }
        } else {
            echo json_encode([
                "emailError" => "Email already exists!"
            ]);
        }
    }
}

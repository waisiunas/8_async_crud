<?php
require_once "../partials/connection.php";
$_POST = json_decode(file_get_contents("php://input"), true);
if (isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    if (empty($name)) {
        echo json_encode([
            "nameError" => "Name is required from PHP!"
        ]);
    } elseif (empty($email)) {
        echo json_encode([
            "emailError" => "Email is required from PHP!"
        ]);
    } else {
        $sql = "SELECT * FROM `users` WHERE `email` = '$email' LIMIT 1;";
        $result = $conn->query($sql);

        if ($result->num_rows === 0) {
            $sql = "INSERT INTO `users`(`name`, `email`) VALUES ('$name', '$email');";
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

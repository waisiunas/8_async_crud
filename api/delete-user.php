<?php
require_once "../partials/connection.php";
$_POST = json_decode(file_get_contents("php://input"), true);

$id = htmlspecialchars($_POST['id']);

$sql = "DELETE FROM `users` WHERE `id` = $id";
if ($conn->query($sql)) {
    echo json_encode([
        "success" => "Magic has been spelled!"
    ]);
} else {
    echo json_encode([
        "failure" => "Magic has failed to spell!"
    ]);
}

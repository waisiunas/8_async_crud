<?php
require_once "../partials/connection.php";
$_POST = json_decode(file_get_contents("php://input"), true);

$id = htmlspecialchars($_POST['id']);

$sql = "SELECT * FROM `users` WHERE `id` = $id";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
echo json_encode($user);
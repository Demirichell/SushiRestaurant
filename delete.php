<?php
include_once "./includes/connect.php";

$id = intval($_GET['id']);

//var_dump($id);
$sql = "DELETE FROM users WHERE id=?";
$stmt= $conn->prepare($sql);
$stmt->execute([$id]);
header("Location: admin.php");
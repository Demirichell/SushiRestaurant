<?php
include_once "./includes/connect.php";

$id = intval($_GET['id']);

//var_dump($id);
$sql = "DELETE FROM gerechten WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
header("Location: admin.php");

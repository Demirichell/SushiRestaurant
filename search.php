<?php
include_once('includes/connect.php');
$search = $_POST['search'];
$sql = "select * from gerechten where name like '%$search%' ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo $row['naam'] . " " .  $row["prijs"] . " " . $row["beschrijving"];
    }
}

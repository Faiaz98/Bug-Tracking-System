<?php
include 'database.php';
session_start();

$title = $_POST['title'];
$description = $_POST['description'];
$user_id = $_SESSION['user_id'];

$sql = "INSERT INTO bugs (title, description, user_id) VALUES ('$title', '$description', '$user_id')";

if ($conn->query($sql) === TRUE) {
    header("Location: view_bugs.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

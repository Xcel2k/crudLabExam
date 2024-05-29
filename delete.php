<?php
include 'config.php';

$id = $_GET['id'];

$sql = "DELETE FROM books WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: record.php");
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>

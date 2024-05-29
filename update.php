<?php
include 'config.php';

$id = $_POST['id'];
$title = $_POST['title'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$publication_date = $_POST['publication_date'];

$sql = "UPDATE books SET title='$title', author='$author', genre='$genre', publication_date='$publication_date' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header("Location: record.php");
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

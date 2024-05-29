<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $publication_date = $_POST['publication_date'];

    $sql = "INSERT INTO books (title, author, genre, publication_date) VALUES ('$title', '$author', '$genre', '$publication_date')";

    if ($conn->query($sql) === TRUE) {
        header("Location: record.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

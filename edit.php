<?php
include 'config.php';

$id = $_GET['id'];
$sql = "SELECT * FROM books WHERE id=$id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No record found";
    exit;
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&display=swap" rel="stylesheet">
    <title>Edit Book</title>
</head>
<body class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
    <div class="max-w-screen-xl m-0 sm:m-20 bg-white shadow sm:rounded-lg flex justify-center flex-1 mt-8">
        <div class="p-6 sm:p-12">
            <h1 class="text-2xl xl:text-3xl font-extrabold">Edit Book</h1>
            <form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                <label>Title:</label>
                <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
                <label>Author:</label>
                <input type="text" name="author" value="<?php echo $row['author']; ?>" required><br>
                <label>Genre:</label>
                <input type="text" name="genre" value="<?php echo $row['genre']; ?>" required><br>
                <label>Publication Date:</label>
                <input type="date" name="publication_date" value="<?php echo $row['publication_date']; ?>" required><br>
                <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-lg">Update</button>
            </form>
        </div>
    </div>
</body>
</html>

<?php
require "session_management.php";

if (!isset($_SESSION['username'])) {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Fiction Genre - AUX Audio Library</title>
</head>

<body>
    <div class="container">
        <h1>Fiction</h1>
        <p>Explore our collection of fiction audiobooks.</p>

        <div class="book-list">
            <div class="book-item">
                <div>
                    <img src="img/fiction_book1.jpg" alt="Fiction Book 1" class="book-img">
                </div>
                <div class="book-info">
                    <h3>Title: The Great Gatsby</h3>
                    <p><strong>Author:</strong> F. Scott Fitzgerald</p>
                    <p><strong>Release Date:</strong> April 10, 1925</p>
                    <p><strong>Narrator:</strong> Jake Gyllenhaal</p>
                    <a href="gatsby.html" class="listen-link">Listen to the Book</a>
                </div>
            </div>
            <div class="book-item">
                <img src="img/fiction_book2.jpg" alt="Fiction Book 2" class="book-img">
                <div class="book-info">
                    <h3>Title: To Kill a Mockingbird</h3>
                    <p><strong>Author:</strong> Harper Lee</p>
                    <p><strong>Release Date:</strong> July 11, 1960</p>
                    <p><strong>Narrator:</strong> Sissy Spacek</p>
                    <a href="coming_soon.html" class="listen-link">Listen to the Book</a>
                </div>
            </div>
            <div class="book-item">
                <img src="img/fiction_book3.jpg" alt="Fiction Book 2" class="book-img">
                <div class="book-info">
                    <h3>Title: The Innocent</h3>
                    <p><strong>Author:</strong> David Baldacci</p>
                    <p><strong>Release Date:</strong> April 17, 2012</p>
                    <p><strong>Narrator:</strong> Morgan Freeman</p>
                    <a href="coming_soon.html" class="listen-link">Listen to the Book</a>
                </div>
            </div>
        </div>

        <a href="homepage.php" class="back-button">Back to Home</a>
    </div>
</body>

</html>
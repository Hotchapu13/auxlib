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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Welcome to AUX Audio Library</title>
  </head>

  <body>
    <div class="container">
      <h1>Welcome to AUX Audio Library</h1>
      <h2>AUX LIBRARY OF GENRES</h2>

      <div class="genres">
        <div class="genre">
          <a href="fiction.php">
            <img src="img/fiction.jpg" alt="Fiction" class="genre-img" />
            <h3>Fiction</h3>
          </a>
        </div>
        <div class="genre">
          <a href="coming_soon.html">
            <img src="img/nonfiction.jpg" alt="Non-Fiction" class="genre-img" />
            <h3>Non-Fiction</h3>
          </a>
        </div>
        <div class="genre">
          <a href="coming_soon.html">
            <img src="img/mystery.jpg" alt="Mystery" class="genre-img" />
            <h3>Mystery</h3>
          </a>
        </div>
        <div class="genre">
          <a href="coming_soon.html">
            <img src="img/fantasy.jpg" alt="Fantasy" class="genre-img" />
            <h3>Fantasy</h3>
          </a>
        </div>
        <div class="genre">
          <a href="coming_soon.html">
            <img src="img/biography.jpg" alt="Biography" class="genre-img" />
            <h3>Biography</h3>
          </a>
        </div>
      </div>

      <a href="index.html" class="logout-button">Logout</a>
    </div>
  </body>
</html>

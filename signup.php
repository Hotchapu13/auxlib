<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Aux Audio Library</title>
    <link rel="stylesheet" href="signup.css">
</head>

<body>
    <div class="signup-container">
        <h2>Sign Up to Join Aux Audio Library</h2>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            require "dbConnect.php";
            
            // Sanitize inputs
            $name = $conn->real_escape_string($_POST['name']);
            $email = $conn->real_escape_string($_POST['email']);
            $password = $conn->real_escape_string($_POST['password']);

            // Insert data into database
            $sql = "INSERT INTO user (username, email, password) VALUES ('$name', '$email', '$password')";

            if ($conn->query($sql) === TRUE) {
                echo "<script>
                            alert('Account created successfully!');
                            window.location.href = 'index.html';
                        </script>";
            } else {
                echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }

            $conn->close();
        }
        ?>

        <form method="post" action="signup.php">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm_password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" required>

            <label>
                <input type="checkbox" name="terms" required> I agree to the Terms of Service and Privacy Policy
            </label>

            <button type="submit">Sign Up</button>
        </form>

        <p>Already have an account? <a href="index.html">Log in</a></p>
    </div>

    <script>
        document.querySelector('form').addEventListener('submit', function(e) {
            var password = document.getElementById('password').value;
            var confirm_password = document.getElementById('confirm_password').value;
            if (password !== confirm_password) {
                e.preventDefault();
                alert('Passwords do not match!');
            }
        });
    </script>
</body>

</html>
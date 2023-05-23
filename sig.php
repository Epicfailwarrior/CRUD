<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>
    <form action="" class="login">
    <h2>Sign Up</h2>
    <form action="signup.php" method="POST">
        <label for="new_username">Username:</label>
        <input type="text" id="new_username" name="new_username" required><br><br>
        <label for="new_password">Password:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>
        <label for="new_password">Re-enter Password:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>
        <input type="submit" value="Sign-up">
        <a href="log.php" type="button">Login</a>
    </form>
    </form>
</body>
</html>

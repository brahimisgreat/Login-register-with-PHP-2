<!DOCTYPE html>
<?php
    $colors = ["red", "green", "blue", "yellow", "purple", "orange"];
    $colorsw = array("john", "doe", "jane", "smith", "james", "bond");

    print_r($colors);
?>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2><?= $rand_color ?></h2>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Login">

    </form>
</body>
</html>
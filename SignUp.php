<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>sign up</h1>
    <div class="container">
        <form class="" action="index.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required><br><br>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required><br><br>
            </div>
            <div class="form-group">
                <label for="password">Age:</label>
                <input type="number" class="form-control" id="age" name="ages" required><br><br>
            </div>
            <div class="form-group">
                <label for="password">email:</label>
                <input type="email" class="form-control" id="email" name="email" required><br><br>
            </div>
            <input type="submit" value="Login">
            <div>
                already have an account? <a href="index.php">sign in Now</a>
            </div>
        </form>
    </div>
</body>

</html>
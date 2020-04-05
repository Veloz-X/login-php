<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>Login</title>
</head>

<body>
    <?php require 'partials/header.php' ?>

    <h1>Login</h1>
    <span>or <a href="signup.php">Registrar</a></span>
    <form action="login.php" method="post">
        <label for="email">Email</label>
        <input type="text" name="Email" placeholder="joffreandres11@gmail.com">
        <input type="password" name="password" placeholder="**********">
        <input type="submit" value="Send">
    </form>
</body>

</html>
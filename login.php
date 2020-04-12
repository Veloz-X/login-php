<?php

session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: index.php');
}
require 'database.php';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
  $records->bindParam(':email', $_POST['email']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $message = '';

  if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
    $_SESSION['user_id'] = $results['id'];
    header("Location: /index.php");
  } else {
    $message = 'Cuenta no Registrada';
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
  <?php require 'partials/header.php' ?>



  <div class="login-box">
    <h1>Iniciar Sesion</h1>

    <form action="login.php" method="POST">
      <label for="username">Email</label>
      <input type="email" name="email" placeholder="email@email.com">
      <label for="password">Contraseña</label>
      <input name="password" type="password" placeholder="*********">
      <center>
        <input type="submit" value="Iniciar Sesion">
      </center>
      <a href="signup.php">Crear Nueva Cuenta</a>
      <?php if (!empty($message)) : ?>
        <p> <?= $message ?></p>
      <?php endif; ?>
    </form>

  </div>


</body>

</html>
<?php 
    require 'database.php';

    $message='';

    if(!empty($_POST['email'])  && !empty($_POST['password']) ){
        $sql = "INSERT INTO users (email ,password) VALUES (:email ,:password)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email',$_POST['email']);
        $password =password_hash($_POST['password'],PASSWORD_BCRYPT);
        $stmt->bindParam(':password',$password);
        if ($stmt->execute()) {
            $message = 'Successful';
        }else{
            $message = 'Sorry the Have Errror   ';
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <title>SignUp</title>
</head>
<body>
    <?php require 'partials/header.php' ?>
    <?php if(!empty($message)): ?>
        <p><?php $message ?></p>
    <?php endif; ?>

    <h1>Registara</h1>
    <span>or <a href="login.php">Login</a></span>
    <form action="signup.php" method="post">
        <!-- <label for="email">Email</label> -->
        <input type="text" name="email" placeholder="joffreandres11@gmail.com">
        <input type="password" name="password" placeholder="**********">
        <input type="password" name="confirm_password" placeholder="**********">
        <input type="submit" value="Send">
    </form>

    
</body>
</html>
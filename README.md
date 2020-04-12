# Login/Register en PHP
Sistema simple de Iniciar y Registar con almacenamiento en mysql
### Inicio

<img src="https://raw.githubusercontent.com/Veloz-X/login-php/master/img/1.JPG" height="325" width="600">

### Iniciar Sesion
<img src="https://raw.githubusercontent.com/Veloz-X/login-php/master/img/2.JPG" height="325" width="600">

### Registrar
<img src="https://raw.githubusercontent.com/Veloz-X/login-php/master/img/3.JPG" height="325" width="600">

### Logearse

<img src="https://raw.githubusercontent.com/Veloz-X/login-php/master/img/4.JPG" height="325" width="600">

### Mysql
Almacenamiento de los usuarios

<img src="https://raw.githubusercontent.com/Veloz-X/login-php/master/img/5.JPG" height="325" width="600">

# Explicacion & Codigo

- Los usuarios son almacenados en MySQL con Su Id,email,password
 - Las contraseña de los usuarios estan encriptado
 - No se puede acceder a directorio de register o login si el ususario ya Inicio Sesion.
 
session_start();

if (isset($_SESSION['user_id'])) {
  header('Location: index.php');
}
require 'database.php';

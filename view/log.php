<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  include '../controller/UserController.php';
   $controller = new UserController();
   $controller->register();

}
if (isset($_SESSION['error'])) {
  echo $_SESSION['error'];
unset($_SESSION['error']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post" action="">
     <input type="text" name="login">
     <input type="text" name="password">
     <button type="submit">Авторизоваться</button>
  </form>
</body>
</html>
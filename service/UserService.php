<?php
class UserService
{

  
  public function reg($log,$pass) {

    $mysqli = new mysqli("localhost", "root", "", "olge");

    $result = $mysqli->query("SELECT * FROM users");

      while($row = $result->fetch_assoc()) {
        if ($log == $row['login'] ) {
          $_SESSION['error'] = "Логин $log уже зарегистрирован"; 
          header("location:/olge/view/reg.php");
          die();
        }
        
       }

    $sql = "INSERT INTO users (login, password,role) VALUE ('$log','$pass',1)";

    if (mysqli_query($mysqli,$sql)) {
     header("location:/olge/view/log.php");
    }
    
  }
  
  public function log($login,$password) {
    $mysqli = new mysqli("localhost", "root", "", "olge");

    $result = $mysqli->query("SELECT * FROM users WHERE login = '$login' AND password = '$password'");
    $user = $result->fetch_assoc();

    if ($user == null) {
      var_dump($user);

      $_SESSION['error'] = "Пользователь $login не найден"; 
      header("location:/olge/view/log.php");
      die();
    }
    $_SESSION['id_user'] = $user['id'];
    $_SESSION['role'] = $user['role'];
    $_SESSION['auth'] = true;
    header("location:/olge/view/home.php");
    var_dump($result);
    





  }
}
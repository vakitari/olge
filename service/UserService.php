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

    $result = $mysqli->query("SELECT * FROM users");

    
  }
}

<?php


class UserController  
{
  function register() {
   include '../service/UserService.php';
    $service = new UserService();
    $login = $_POST["login"];
    $password = $_POST["password"];
    $service->reg($login,$password);
  }

  function login( ) {
    
  }


}

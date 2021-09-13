<?php
include("./users.php");
session_start();
if($_SERVER['REQUEST_METHOD']== "POST"){
if ( isset($_POST['login']) && isset($_POST['password']) )
{
    $login = htmlentities($_POST['login']);
    $password = htmlentities($_POST['password']);
    $redirect="Location:/signin.php";
    $_SESSION["message"]="Problème de login";
    foreach ($users as $key => $value) {
      if($key==$login){
        if($value==$password){
          $_SESSION["user"]=$login;
          $redirect="Location:/welcome.php";
          unset($_SESSION["message"]);
        }else $_SESSION["message"]="Problème de mot de passe";
      }
    }
    header($redirect);
}

exit;
}else header("Location:/signin.php");

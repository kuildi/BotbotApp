<?php
require "./DB/db.php";

$data = $_POST;
$fl = true;
if( isset($data['login_btn']) )
{
  $user = R::findOne( 'user', 'login = ?', array($data['login']) );
  if( $user )
  {
    if( password_verify($data['password'], $user->password) )
    {
      $_SESSION['logged_user'] = $user;
      echo '<script>alert("Вы авторизованы!")</script>';
      echo '<script>document.location.replace("main.php");</script>'; //редирект на главную страницу
    } else
    {
      echo '<script>alert("Пароль неверный")</script>';
      $fl = false;
    }
  } else //пользователь не найден
  {
    echo '<script>alert("Пользователь не найден")</script>';
    $fl = false;
  }
  
}
?>
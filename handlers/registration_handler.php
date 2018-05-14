<?php
require "./DB/db.php"; 

$data = $_POST;
//Преобразуем специальные символы в HTML-сущности и удалим экранирование символов
$login = htmlspecialchars(stripslashes($_POST['login']));
$password = htmlspecialchars(stripslashes($_POST['password']));
$name = htmlspecialchars(stripslashes($_POST['name']));
$surname = htmlspecialchars(stripslashes($_POST['surname']));
$email = htmlspecialchars(stripslashes($_POST['email']));
$grade = $_POST['grade'];

$fl = true;

//Проверка на повтор логина и email
if( R::count('user', "login = ?", array($login)) > 0 ) 
{
  $fl = false;
  echo '<script>alert("Данный логин уже используется")</script>';
} elseif( R::count('user', "email = ?", array($email)) > 0 ) 
{
  $fl = false;
  echo '<script>alert("Данный E-mail уже используется")</script>';
}

//Регистрация пользователя
if( isset($data['action']) )
{
  if( $fl )
  {
    $user = R::dispense('user');
    $user->login = $login;
    $user->password = password_hash($password, PASSWORD_DEFAULT);
    $user->name = $name;
    $user->surname = $surname;
    $user->email = $email;
    $user->grade = $grade;
    
    R::store($user);

    echo '<script>alert("Вы зарегистрированы!")</script>';
    echo '<script>document.location.replace("index.php");</script>'; //редирект на главную страницу
  }
}
?>
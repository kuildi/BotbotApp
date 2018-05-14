<?php
require "./DB/db.php";
$data = $_POST;

$emotion_name = $_POST['emotion_name'];
$id_line1 = 1;
$id_line2 = 2;
$id_line3 = 3;
$id_line4 = 4;
$id_line5 = 5;
$id_line6 = 6;
$id_line7 = 7;
$id_line8 = 8;

$dot1 = $_POST['#box1'];
$dot2 = $_POST['#box2'];
$dot3 = $_POST['#box3'];
$dot4 = $_POST['#box4'];
$dot5 = $_POST['#box5'];
$dot6 = $_POST['#box6'];
$dot7 = $_POST['#box7'];
$dot8 = $_POST['#box8'];

$dot9 = $_POST['#box9'];
$dot10 = $_POST['#box10'];
$dot11 = $_POST['#box11'];
$dot12 = $_POST['#box12'];
$dot13 = $_POST['#box13'];
$dot14 = $_POST['#box14'];
$dot15 = $_POST['#box15'];
$dot16 = $_POST['#box16'];

$dot17 = $_POST['#box17'];
$dot18 = $_POST['#box18'];
$dot19 = $_POST['#box19'];
$dot20 = $_POST['#box20'];
$dot21 = $_POST['#box21'];
$dot22 = $_POST['#box22'];
$dot23 = $_POST['#box23'];
$dot24 = $_POST['#box24'];

$dot25 = $_POST['#box25'];
$dot26 = $_POST['#box26'];
$dot27 = $_POST['#box27'];
$dot28 = $_POST['#box28'];
$dot29 = $_POST['#box29'];
$dot30 = $_POST['#box30'];
$dot31 = $_POST['#box31'];
$dot32 = $_POST['#box32'];

$dot33 = $_POST['#box33'];
$dot34 = $_POST['#box34'];
$dot35 = $_POST['#box35'];
$dot36 = $_POST['#box36'];
$dot37 = $_POST['#box37'];
$dot38 = $_POST['#box38'];
$dot39 = $_POST['#box39'];
$dot40 = $_POST['#box40'];

$dot41 = $_POST['#box41'];
$dot42 = $_POST['#box42'];
$dot43 = $_POST['#box43'];
$dot44 = $_POST['#box44'];
$dot45 = $_POST['#box45'];
$dot46 = $_POST['#box46'];
$dot47 = $_POST['#box47'];
$dot48 = $_POST['#box48'];

$dot49 = $_POST['#box49'];
$dot50 = $_POST['#box50'];
$dot51 = $_POST['#box51'];
$dot52 = $_POST['#box52'];
$dot53 = $_POST['#box53'];
$dot54 = $_POST['#box54'];
$dot55 = $_POST['#box55'];
$dot56 = $_POST['#box56'];

$dot57 = $_POST['#box57'];
$dot58 = $_POST['#box58'];
$dot59 = $_POST['#box59'];
$dot60 = $_POST['#box60'];
$dot61 = $_POST['#box61'];
$dot62 = $_POST['#box62'];
$dot63 = $_POST['#box63'];
$dot64 = $_POST['#box64'];



if( isset($data['save_emotion']) )
{
  //Создание таблицы с названием эмоции и id строк матрицы
  $emotion = R::dispense('emotion');
  $user = $_SESSION['logged_user'];
  
  $emotion->name = $emotion_name;
  $emotion->id_line1 = $id_line1;
  $emotion->id_line2 = $id_line2;
  $emotion->id_line3 = $id_line3;
  $emotion->id_line4 = $id_line4;
  $emotion->id_line5 = $id_line5;
  $emotion->id_line6 = $id_line6;
  $emotion->id_line7 = $id_line7;
  $emotion->id_line8 = $id_line8;
  
  
  $user->ownEmotionList[] = $emotion;
  R::store($user);
  
  //Создание таблицы со значениями точек
  $dots = R::dispense('dots');
  
  $emotion->ownDotsList[] = $dots;
  R::store($emotion);
  
  echo '<script>alert("Эмоция сохранена!")</script>';
}
?>


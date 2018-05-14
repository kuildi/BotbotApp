<?php
require "./DB/db.php";
$data = $_POST;

$name_move = $_POST['name_move'];
$right_up = $_POST['right_up'];
$right_down = $_POST['right_down'];
$left_up = $_POST['left_up'];
$left_down = $_POST['left_down'];

if( isset($data['save_move']) )
{
  $move = R::dispense('move');
  $user = $_SESSION['logged_user'];
  
  $move->name = $name_move;
  $move->right_up = $right_up;
  $move->right_down = $right_down;
  $move->left_up = $left_up;
  $move->left_down = $left_down;
  
  $user->ownMoveList[] = $move;
  R::store($user);
  
  echo '<script>alert("Движение создано!")</script>';
}
?>
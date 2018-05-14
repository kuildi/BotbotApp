<?php
require "../DB/db.php";

$id = $_GET['id'];
$delete_move = R::load('move', $id);

R::trash( $delete_move );
header('Location: ../user_movements.php');
exit();
?>




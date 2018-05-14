<?php
require "../DB/db.php";

unset($_SESSION['logged_user']);
header('Location: /');

?>
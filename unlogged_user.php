<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Войдите в аккаунт</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="icon" type="favicon.ico" href="favicon.ico">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
  <nav class="amber">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center purple-text"><img src="logo.png" class="responsive-img logo-img"></a>
    </div>
  </nav>
  <div class="section amber lighten-2 back-img">
    <div class="row">
      <div class="card col m4 offset-m4 center">
        <div class="card-content">
          <div class="row">
            <i class="large material-icons red-text">verified_user</i>
          </div>
          <span class="card-title">Войдите или зарегистрируйтесь</span>
          <div class="card-action">
          <div class="row">
            <a href="index.php" class="btn waves-effect purple">Войти</a>
          </div>
          <div class="row">
            <a href="registration.php" class="btn waves-effect purple">Зарегистрироваться</a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
<!--FOOTER-->
<?php include "footer.php";?>

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</html>
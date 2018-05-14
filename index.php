<?php require 'handlers/login_handler.php'; ?>
<!DOCTYPE html>
<html>

<head>
 <title>Авторизация</title>
  <meta charset="utf-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
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

  <div class="section amber lighten-2 background-img back-img">
    <div class="row">
      <div class="card-panel col m4 offset-m4 center hoverable ">
        <i class="large material-icons purple-text">account_circle</i>
        <div class="divider"></div>
        <div class="row">
          <form class="col s12" method="post" action="index.php">
            <div class="row">
              <div class="input-field col s12">
                <input name="login" type="text" required>
                <label for="first_name">Логин</label>
              </div>
              <div class="input-field col s12">
                <input name="password" type="password" required>
                <label for="last_name">Пароль</label>
              </div>
            </div>
            <button class="btn  waves-effect waves-light purple" type="submit" name="login_btn">Войти
                  </button>
            <a href="registration.php" class="btn waves-effect waves-light purple">Зарегистрироваться
                  </a>
          </form>
        </div>
      </div>
    </div>
  </div>

  

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
</body>
<!--FOOTER-->
  <?php include "footer.php";?>
</html>
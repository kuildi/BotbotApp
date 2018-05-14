<?php
require 'handlers/registration_handler.php';
?>
  <!DOCTYPE html>
  <html>

  <head>
   <title>Регистрация</title>
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

    <div class="section amber lighten-2 back-img">

      <div class="row">
        <div class="card-panel col m4 offset-m4 center hoverable">
          <i class="large material-icons purple-text">person_add</i>
          <div class="divider"></div>
          <div class="row">
            <form class="col s12" method="post" action="registration.php">
              <div class="row">
                <div class="input-field col s6">
                  <input name="login" type="text" pattern="^[a-zA-Z0-9]+$" maxlength="20" required>
                  <label for="login">Логин</label>
                </div>
                <div class="input-field col s6">
                  <input name="password" type="password" maxlength="20" required>
                  <label for="first_name">Пароль</label>
                </div>
                <div class="input-field col s6">
                  <input name="name" type="text" pattern="^[a-zA-ZА-Яа-яЁё]+$" required>
                  <label for="first_name">Имя</label>
                </div>
                <div class="input-field col s6">
                  <input name="surname" type="text" pattern="^[a-zA-ZА-Яа-яЁё]+$" required>
                  <label for="surname">Фамилия</label>
                </div>
                <div class="input-field col s6">
                  <input name="email" type="email" required>
                  <label for="email">E-mail</label>
                </div>
                <div class="input-field col s3">
                  <select name="grade" required>
                          <option value="" disabled selected></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                        </select>
                  <label>Класс обучения</label>
                </div>
              </div>
              <button name="action" type="submit" class="btn waves-effect waves-light purple">Зарегистрироваться</button>
            </form>
          </div>
        </div>
      </div>
    </div>


    <!--FOOTER-->
    <?php include "footer.php";?>

    <!--Import jQuery before materialize.js-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>

    <script>
      $(document).ready(function() {
        $('select').material_select();
      });

    </script>
  </body>

  </html>

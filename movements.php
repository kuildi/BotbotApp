<?php require 'handlers/move_handler.php';?>
<?php if(isset($_SESSION['logged_user'])) :?>
<!DOCTYPE html>
<html>

<head>
  <title>Создание движения</title>
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
  <!--HEADER-->
  <?php include "header.php";?>
  <!--//HEADER-->

  <div class="section amber lighten-2 back-img">
    <h4 class="center purple-text">Управление углами серво-приводов</h4>
    <div class="row">
      <div class="col s4 push-s4">
        <div class="card hoverable">
          <div class="card-content">
            <p class="card-title">Здесь Вы можете задать нужные углы поворота для каждого серво-привода и сохранить как отдельное движение.</p>
            <div class="input-field">
              <input type="text" name="name_move" form="move" required>
              <label for="name_move">Название движения</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">

    </div>

    <div class="row">
      <form action="movements.php" method="post" name="move" id="move">
        <div class="row" style="margin-bottom: 0;">
          <div class="col s1 grey lighten-3 block push-s4"></div>
          <div class="col s1 grey lighten-3 block push-s6"></div>
        </div>
        <div class="row" style="margin-bottom: 0;">
          <div class="col s1 grey lighten-3 block push-s4"></div>
          <div class="col s1 grey lighten-3 block push-s6"></div>
          <div class="col s1 push-s2">
            <p class="range-field">
              <input type="range" name="right_up" min="0" max="90" />
            </p>
          </div>
          <div class="col s1 push-s4">
            <p class="range-field">
              <input type="range" name="left_up" min="0" max="90" />
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col s1 grey lighten-3 block push-s4">
            <label for="#test5" class="black-text">от 0 до 90</label>
          </div>
          <div class="col s1 grey lighten-3 block push-s6">
            <label for="#test5" class="black-text">от 0 до 90</label>
          </div>
        </div>

        <div class="row">
          <div class="col s1 grey lighten-3 block push-s3"></div>
          <div class="col s1 grey lighten-3 block push-s7"></div>

          <div class="col s1 push-s1">
            <p class="range-field">
              <input type="range" name="right_down" min="0" max="90" />
              <label for="#test5" class="black-text">от 0 до 90</label>
            </p>
          </div>
          <div class="col s1 push-s5">
            <p class="range-field">
              <input type="range" name="left_down" min="0" max="90" />
              <label for="#test5" class="black-text">от 0 до 90</label>
            </p>
          </div>
          <div class="col s4 center">
            <button class="btn waves-effect purple" name="save_move">Сохранить</button>
          </div>
        </div>
      </form>
    </div>
  </div>


  <!--Import jQuery before materialize.js-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.dropdown-button').dropdown({
        belowOrigin: true,
      });
    });

  </script>

</body>
<!--FOOTER-->
<?php include "footer.php";?>
<?php else : include "unlogged_user.php"; endif;?>

</html>

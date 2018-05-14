<?php require "DB/db.php";?>
<?php if(isset($_SESSION['logged_user'])) :?>
<!DOCTYPE html>
<html>

<head>
  <title>Главная</title>
  <meta charset="utf-8">
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
      <a href="#" class="brand-logo center lh-0"><img src="logo.png" class="logo-img"></a>
      <!-- Dropdown Trigger -->
      <div class="back-btn">
        <a class='dropdown-button btn waves-effect purple' href='#' data-activates='drop'><?php echo $_SESSION['logged_user']->login;?></a>

        <a href="#modal1" class="btn waves-effect modal-trigger purple">Подключить робота</a>
      </div>
    </div>
    <!-- Dropdown Structure -->
    <ul id='drop' class='dropdown-content'>
      <li><a href="user_movements.php" class='purple-text'><i class="material-icons">directions_walk</i>Движения</a></li>
      <li><a href="#!" class='purple-text'><i class="material-icons">insert_emoticon</i>Эмоции</a></li>
      <li class="divider" tabindex="-1"></li>
      <li><a href="handlers/logout.php" class='purple-text'><i class="material-icons">exit_to_app</i>Выйти</a></li>
    </ul>
  </nav>
  <div class="section amber lighten-2  back-img" style="height: 400px;">
    <div class="row center">
      <a href="movements.php" class="btn waves-effect waves-light purple">Добавить движение</a>
      <a href="emotions.php" class="btn waves-effect waves-light purple">Создать эмоцию</a>
    </div>
    <div class="row">
      <div class="col s4 center">
        <div class="row">
          <div class="btn waves-effect waves-light purple"><i class="material-icons">arrow_upward</i></div>
        </div>
        <div class="row">
          <div class="btn waves-effect waves-light purple"><i class="material-icons">arrow_back</i></div>
          <div class="btn waves-effect waves-light purple"><i class="material-icons">arrow_forward</i></div>
        </div>
        <div class="row">
          <div class="btn waves-effect waves-light purple"><i class="material-icons">arrow_downward</i></div>
        </div>
      </div>

      <div class="col s4 center">
        <a id="transition_ul" href="#!" class="btn waves-effect purple">Созданные Вами движения и эмоции</a>
        <ul id="test" class="hidden">
          <?php include "transition_output.php";?>
        </ul>
      </div>


      <div class="col s4 center">
        <div class="row">
          <div class="btn-large waves-effect waves-light purple"><i class="material-icons">sentiment_very_satisfied</i></div>
          <div class="btn-large waves-effect waves-light purple"><i class="material-icons">sentiment_satisfied</i></div>
          <div class="btn-large waves-effect waves-light purple"><i class="material-icons">sentiment_neutral</i></div>
        </div>
        <div class="row">
          <div class="btn-large waves-effect waves-light  purple"><i class="material-icons">sentiment_dissatisfied</i></div>
          <div class="btn-large waves-effect waves-light  purple"><i class="material-icons">sentiment_very_dissatisfied</i></div>
        </div>
      </div>
    </div>
  </div>



  <!-- Modal Structure -->
  <div id="modal1" class="modal modal-fixed-footer" style="height: 55%; width: 30%;">
    <div class="modal-content">
      <h5 class="purple-text">Список доступных для подключения роботов</h5>
      <div class="divider"></div>
      <form action="#">
        <p>
          <input type="checkbox" id="test1" />
          <label for="test1">Робот1</label>
        </p>
        <p>
          <input type="checkbox" id="test2" />
          <label for="test2">Робот2</label>
        </p>
        <p>
          <input type="checkbox" id="test3" />
          <label for="test3">Робот3</label>
        </p>
        <p>
          <input type="checkbox" id="test4" />
          <label for="test4">Робот4</label>
        </p>
      </form>
    </div>
    <div class="modal-footer">
      <div class="center">
        <a href="#!" class="modal-action modal-close waves-effect btn purple">Выбрать</a>
      </div>
    </div>
  </div>


  <!--Import jQuery before materialize.js-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script>
    $(document).ready(function() {
      $('select').material_select();
      $('.modal').modal();
      $('.dropdown-button').dropdown({
        belowOrigin: true
      });

      $('#transition_ul').click(function() {
        $("#test").slideToggle("300")
      });

    });

  </script>
</body>
<!--FOOTER-->
<?php include "footer.php";?>

<?php else : include "unlogged_user.php"; endif;?>

</html>

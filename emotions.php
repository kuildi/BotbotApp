<?php require "handlers/emotion_handler.php";?>
<?php if(isset($_SESSION['logged_user'])) :?>
<!DOCTYPE html>
<html>

<head>
  <title>Создание эмоции</title>
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
    <h4 class="center purple-text">Создание эмоций</h4>
    <div class="row">
      <div class="col s4 push-s4">
        <div class="card hoverable">
          <div class="card-content">
            <p class="card-title">Отметьте квадраты, которые будут светиться.</p>
            <div class="input-field">
              <input type="text" name="emotion_name" form="emotion" required>
              <label for="name_move">Название эмоции</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        

        <!--         ГОЛОВА-->
        <div class="card-panel col s4 offset-s4 hoverable">
          <div class="row" style="margin-top: 30px;">
            <div class="col s3 grey lighten-1  block-eye push-s1"></div>
            <div class="col s3 grey lighten-1  block-eye push-s5"></div>
          </div>
          <div class="divider grey" style="margin-bottom: 10px;"></div>


          <div class="container grey lighten-2" style="margin-bottom: 10px;">
            <form action="emotions.php" method="post" name="emotion" id="emotion">
              <div class="row" style="margin-bottom: 0;">
                <p class="col s1 offset-s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box1" />
                  <label for="box1"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box2" />
                  <label for="box2"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box3" />
                  <label for="box3"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box4" />
                  <label for="box4"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box5" />
                  <label for="box5"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box6" />
                  <label for="box6"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box7" />
                  <label for="box7"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box8" />
                  <label for="box8"></label>
                </p>

              </div>

              <div class="row" style="margin-bottom: 0;">
                <p class="col s1 offset-s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box9" />
                  <label for="box9"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box10" />
                  <label for="box10"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box11" />
                  <label for="box11"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box12" />
                  <label for="box12"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box13" />
                  <label for="box13"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box14" />
                  <label for="box14"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box15" />
                  <label for="box15"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box16" />
                  <label for="box16"></label>
                </p>

              </div>

              <div class="row" style="margin-bottom: 0;">
                <p class="col s1 offset-s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box17" />
                  <label for="box17"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box18" />
                  <label for="box18"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box19" />
                  <label for="box19"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box20" />
                  <label for="box20"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box21" />
                  <label for="box21"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box22" />
                  <label for="box22"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box23" />
                  <label for="box23"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box24" />
                  <label for="box24"></label>
                </p>

              </div>
              <div class="row" style="margin-bottom: 0;">
                <p class="col s1 offset-s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box25" />
                  <label for="box25"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box26" />
                  <label for="box26"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box27" />
                  <label for="box27"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box28" />
                  <label for="box28"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box29" />
                  <label for="box29"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box30" />
                  <label for="box30"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box31" />
                  <label for="box31"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box32" />
                  <label for="box32"></label>
                </p>

              </div>
              <div class="row" style="margin-bottom: 0;">
                <p class="col s1 offset-s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box33" />
                  <label for="box33"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box34" />
                  <label for="box34"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box35" />
                  <label for="box35"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box36" />
                  <label for="box36"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box37" />
                  <label for="box37"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box38" />
                  <label for="box38"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box39" />
                  <label for="box39"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box40" />
                  <label for="box40"></label>
                </p>

              </div>
              <div class="row" style="margin-bottom: 0;">
                <p class="col s1 offset-s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box41" />
                  <label for="box41"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box42" />
                  <label for="box42"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box43" />
                  <label for="box43"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box44" />
                  <label for="box44"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box45" />
                  <label for="box45"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box46" />
                  <label for="box46"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box47" />
                  <label for="box47"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box48" />
                  <label for="box48"></label>
                </p>

              </div>
              <div class="row" style="margin-bottom: 0;">
                <p class="col s1 offset-s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box49" />
                  <label for="box49"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box50" />
                  <label for="box50"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box51" />
                  <label for="box51"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box52" />
                  <label for="box52"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box53" />
                  <label for="box53"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box54" />
                  <label for="box54"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box55" />
                  <label for="box55"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box56" />
                  <label for="box56"></label>
                </p>

              </div>
              <div class="row" style="margin-bottom: 0;">
                <p class="col s1 offset-s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box57" />
                  <label for="box57"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box58" />
                  <label for="box58"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box59" />
                  <label for="box59"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box60" />
                  <label for="box60"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box61" />
                  <label for="box61"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box62" />
                  <label for="box62"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box63" />
                  <label for="box63"></label>
                </p>
                <p class="col s1 no-margin">
                  <input type="checkbox" class="filled-in" id="box64" />
                  <label for="box64"></label>
                </p>

              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row center">
        <button class="btn waves-effect purple" name="save_emotion" form="emotion">Сохранить</button>
      </div>
    </div>
  </div>

  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.dropdown-button').dropdown({
        belowOrigin: true,
      });
    });
  </script>
</body>
<?php include "footer.php"?>
<?php else : include "unlogged_user.php"; endif;?>
</html>
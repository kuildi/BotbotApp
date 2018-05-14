<?php require "DB/db.php"; ?>
 <?php if(isset($_SESSION['logged_user'])) :?>
  <!DOCTYPE html>
  <html>

  <head>
   <title>Движения</title>
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
    <!--HEADER-->
    <?php include "header.php";?>
    <!--//HEADER-->
    <!--MAIN SECTION-->
    <div class="section amber lighten-2 back-img" style="min-height: 400px;">
      <h3 class="center purple-text">Таблица созданных Вами движений</h3>
      <div class="row">
        <!--ВЫВОД ТАБЛИЦЫ ДВИЖЕНИЙ-->
        <?php
        include 'handlers/output_table.php';
        ?>
      </div>
      <!--//MAIN SECTION-->

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
    </div>
  </body>
  <!--FOOTER-->
  <?php include "footer.php";?>
  <?php else : include "unlogged_user.php"; endif;?>
  </html>
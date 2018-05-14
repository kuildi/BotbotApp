<nav class="amber">
  <div class="nav-wrapper">
    <a href="main.php" class="brand-logo center lh-0"><img src="logo.png" class="logo-img"></a>
    <!-- Dropdown Trigger -->
     <div class="back-btn">
      <a class='dropdown-button btn waves-effect purple' href='#' data-activates='drop'><?php echo $_SESSION['logged_user']->login;?></a>
      <a class="btn waves-effect purple" href="main.php">Назад</a>
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
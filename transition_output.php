<?php
$user_id = $_SESSION['logged_user']->id;
$query = R::findAll( 'move', 'user_id LIKE ?', [$user_id] );

if ($query){
  foreach ($query as $data):
    echo "<li class='list-item'>";
    echo "<div class='row'>";
    echo "<button class='btn waves-effect purple'>".$data['name']."</button>";
    echo "</div>";
    echo "</li>";
  endforeach;
} else {
  echo "<div class='card'>";
  echo "<div class='card-content'>";
  echo "<h5 class='purple-text'>Вы пока что не создали ни одного движения</h5>";
  echo "<div class='card-action'>";
  echo "<a href='movements.php' class='btn waves-effect waves-light purple'>Добавить движение</a>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
} 
  
?>
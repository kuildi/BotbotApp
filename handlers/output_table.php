<?php
$user_id = $_SESSION['logged_user']->id;
$query = R::findAll( 'move', 'user_id LIKE ?', [$user_id] );

if($query){
  echo '<table class="col s6 offset-s3 centered white hoverable">';
  echo '<thead class="purple white-text">';
  echo '<tr>';
  echo '<th>Название</th>';
  echo '<th>Правый верхний</th>';
  echo '<th>Правый нижний</th>';
  echo '<th>Левый верхний</th>';
  echo '<th>Левый нижний</th>';
  echo '<th></th>';
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';



  $i = 0;
  // выводим в HTML-таблицу все данные
  foreach ($query as $data):
      if ($data['user_id'] == $user_id) {
      echo '<tr class="hoverable">';
      echo '<td>' . $data['name'] . '</td>';
      echo '<td>' . $data['right_up'] . '</td>';
      echo '<td>' . $data['right_down'] . '</td>';
      echo '<td>' . $data['left_up'] . '</td>';
      echo '<td>' . $data['left_down'] . '</td>';
      echo '<td>  <button data-target="modal' . $i . '" class="waves-effect waves-purple btn-flat modal-trigger"><i class="purple-text material-icons">delete_forever</i></button> </td>';
      echo '
    <div id="modal' . $i . '" class="modal">
      <div class="modal-content center">
        <h4>Удаление движения</h4>
        <h5>Вы уверены, что хотите удалить движение?</h5>
      </div>
      <div class="modal-footer">
      <div class="center">
        <a href="handlers/delete_move.php?id=' . $data['id'] . '" class="modal-action modal-close waves-effect red btn">Удалить</a>
        <a href="#!" class="modal-action modal-close waves-effect purple btn">Отмена</a>
      </div>
      </div>
    </div>
  </div>';
      echo '</tr>';
      ++$i;
      }
  endforeach;

  echo '</tbody>';
  echo '</table>';
} else {
  echo "<div class='card col s4 offset-s4 center'>";
  echo "<div class='card-content'>";
  echo "<h5 class='purple-text'>Вы пока что не создали ни одного движения</h5>";
  echo "<div class='card-action'>";
  echo "<a href='movements.php' class='btn waves-effect waves-light purple'>Добавить движение</a>";
  echo "</div>";
  echo "</div>";
  echo "</div>";
}

?>
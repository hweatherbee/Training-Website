<?php

define('ROW_MAX', 4); # Max number of modules per row

function init_modules($xml) {
  $row_count = 0;
  echo '<div class="container">';
  echo '<div class="card-deck">';
  echo '<div class="row">';

  foreach ($xml->children() as $m) {
    # If current row greater than or equal to row maximum
    if ($row_count >= ROW_MAX) {
      # close current row, add spacing, and create new row
      echo '</div>';
      echo '</div>';
      echo '<br>';
      echo '<div class="card-deck">';
      echo '<div class="row">';

      $row_count = 0;
    }
    # Create a new column with a module
    new_module($m->name, $m->title);
    # Update row and col counts
    $row_count++;
  }
  # When finished, add padding cols and close current row and container
  echo '</div>';
  echo '</div>';
  echo '</div>';
}

function new_module($mod_title, $mod_discription) {
  echo '
      <div class="card" style="width:400px">

        <div class="card-body">
          <h4 class="card-title">' . $mod_title . '</h4>
          <div class="card-text">
            <p style="text-align:left;">
              ' . $mod_discription . '
            </p>
          </div>
        </div>

        <div class="card-footer">
          <a href="#" class="card-link">View Unit</a>
          <a href="#" class="card-link">Lesson Plans</a>
        </div>

      </div>';
}

?>

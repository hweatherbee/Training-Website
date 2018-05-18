<?php

define('ROW_MAX', 4); # Max number of modules per row

function init_modules($xml) {
  $row_count = 0;
  $padding_cols = 4; # Number of padding cols to add at the end of the loop
  echo '<div class="container">';
  echo '<div class="row">';

  foreach ($xml->children() as $m) {
    # If current row greater than or equal to row maximum
    if ($row_count >= ROW_MAX) {
      # close current row, add spacing, and create new row
      echo '</div>';
      echo '<br>';
      echo '<div class="row">';
      $row_count = 0;
      $padding_cols = 4;
    }
    echo '<div class="col">';
    new_module($m->dir, $m->name);
    echo '</div>';
    $row_count++;
    $padding_cols--;
  }
  # When finished, add padding cols and close current row and container
  for ($i = 0; $i < $padding_cols; $i++) {
    echo '<div class="col"></div>';
  }
  echo '</div>';
  echo '</div>';
}

function new_module($mod_title, $mod_discription) {
  echo '
      <div class="panel panel-default text-center">

        <div class="panel-heading">
          <h2>' . $mod_title . '</h2>
        </div>

        <div class="panel-body">
          <p style="text-align:left;">
            ' . $mod_discription . '
          </p>
        </div>

      <div class="panel-footer">
        <button class="btn btnlg">View Unit</button>
        <button class="btn btnlg">Lesson Plans</button>
      </div>

    </div>';
}

?>

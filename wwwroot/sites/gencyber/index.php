<?php
require ('templateTop.php');
?>

<div class="jumbotron text-center">
 <h1>GenCyber Modules</h1>
</div>

<div class="container">
  <div class="row">

    
      <?php
      module_col('Module 1', 'This is an example of a module description.', 'gcmod1');
      module_col('Module 2', 'This is an example of a module description.', 'gcmod2');
      module_col('Module 3', 'This is an example of a module description.', 'gcmod3');
      module_col('Module 4', 'This is an example of a module description.', 'gcmod4');
      module_col('Module 5', 'This is an example of a module description.', 'gcmod5');
      module_col('Module 6', 'This is an example of a module description.', 'gcmod6');
      module_col('Module 7', 'This is an example of a module description.', 'gcmod7');
      module_col('Module 8', 'This is an example of a module description.', 'gcmod8');
      ?>

  </div>
</div>

</body>
</html>

<?php

  function module_col($mod_title, $mod_discription, $mod_link) {
    echo '
      <div class="col-md-3">
        <div class="card">
        <h5 class="card-header">'.$mod_title.'</h5>
        <div class="card-body"> 
          <p class="card-text">'.$mod_discription.'</p>
          <a href="'.$mod_link.'.php" class="btn btn-primary">View Module</a>
        </div>
      </div>
    </div>';
  }
?>

<?php
require ('../templateTop.php');
?>


<div class="jumbotron text-center">
 <h1>GenCyber Modules</h1>
</div>
<div class="container">
<div class="row">
    <?php
    module_col('Module 1', 'This is an example of a module description.');
    module_col('Module 2', 'This is an example of a module description.');
    module_col('Module 3', 'This is an example of a module description.');
    module_col('Module 4', 'This is an example of a module description.');
    module_col('Module 5', 'This is an example of a module description.');
    module_col('Module 6', 'This is an example of a module description.');
    module_col('Module 7', 'This is an example of a module description.');
    module_col('Module 8', 'This is an example of a module description.');
    ?>
  
</div>



<div class="row">
  
    <?php
  
    ?>
  
</div>
</div>
</body>
</html>

<?php
  function module_col($mod_title, $mod_discription) {
    echo '<div class="col-xs-12 col-sm-6 col-md-4">
      <div class="card">
        <div class="card-header red">
          <h4>'.$mod_title.'</h4>
        </div>
        <div class="card-body">
          <h5 class="card-title">Lorem Ipsum</h5>
          <p class="card-text">'.$mod_discription.'</p>
          <a href="#" class="btn btn-dark">Learn</a>
          <a href="#" class="btn btn-dark">Hands On</a>
        </div>
      </div>
    </div>';
  }
?>

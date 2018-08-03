<?php 
require 'templateTop.php';
?>


<div class="jumbotron text-center">
 <h1>Industrial Control Systems</h1>
</div>

<div class="container">
<div class="row">
  
    <?php
    module_col('Lectures', 'ICS Lectures', 'ics-lectures');
    module_col('Labs', 'ICS Labs', 'ics-labs');
    module_col('Videos', 'ICS Labs', 'ics-videos');
    ?>

</div>

</div>


</body>
</html>

<?php
  function module_col($mod_title, $mod_discription, $mod_link) {
    echo '
      <div class="col-lg-4">
        <div class="card">
        <h5 class="card-header">'.$mod_title.'</h5>
        <div class="card-body"> 
          <p class="card-text">'.$mod_discription.'</p>
          <a href="'.$mod_link.'.php" class="btn btn-primary">View</a>
        </div>
      </div>
    </div>';
  }
?>
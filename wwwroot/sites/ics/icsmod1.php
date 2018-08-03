<?php 
require 'templateTop.php';
?>


<div class="jumbotron text-center">
 <h1>GenCyber Module 1</h1>
</div>

<div class="container">
<div class="row">
  
    <?php
    module_col('Lecture', 'This is an example of a lecure description.', 'gcmod1-lecture');
    module_col('Lesson Plan', 'This is an example of a lesson plan description.', 'gcmod2-lessonplan');
    
    ?>

</div>

</div>


</body>
</html>

<?php
  function module_col($mod_title, $mod_discription, $mod_link) {
    echo '
      <div class="col-md-6">
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
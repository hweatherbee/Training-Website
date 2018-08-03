<?php
require ('templateTop.php');
?>

<div class="jumbotron text-center">
 <h1>Module 1 Control Systems Networks and Protocols</h1>
</div>

<div class="container">
  <div class="row">

    
      <?php
	  $path = 'labs/';
      module_col('Lecture', 'LEcture Name', $path.'link to lecture');
      module_col('Video', 'Video Name', $path.'link to lecture');
      module_col('Lab', 'Lab Name', $path.'link to lecture.pdf');
      module_col('Assessment', 'Assesment Name', $path.'link to lecture');
      

      ?>

  </div>
</div>

</body>
</html>

<?php

  function module_col($mod_title, $mod_discription, $mod_link) {
    echo '
      <div class="col-md-4">
        <div class="card">
        <h5 class="card-header">'.$mod_title.'</h5>
        <div class="card-body"> 
          <p class="card-text">'.$mod_discription.'</p>
          <a href="'.$mod_link.'" target="blank" class="btn btn-sm btn-primary">Download</a>
		  
        </div>
      </div>
    </div>';
  }
?>

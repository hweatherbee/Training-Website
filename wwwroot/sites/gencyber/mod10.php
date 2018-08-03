<?php

require('templateTop.php');

?>
<body>
<div class="jumbotron text-center">
 <h1>GenCyber Modules</h1>
</div>
<div class="container">
	<div class="row">

		<?php
		$path = 'lectures/Module10/';
		module_col('Lecture 10', 'Internet of Things', $path.'LEC10-Internet of Things.pptx');
		module_col('Lesson Plan 10', 'Internet of Things ', $path.'LP10-Internet of Things.pdf');
		
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
         <a href="'.$mod_link.'" download class="btn btn-sm btn-primary"> VIEW </a>
		  
        </div>
      </div>
    </div>';
 }
?>

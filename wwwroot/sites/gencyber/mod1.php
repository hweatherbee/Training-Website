<?php

require('templateTop.php');

?>
<body>
<div class="jumbotron text-center">
 <h1>Module 1 Introduction to CyberSecurity</h1>
</div>
<div class="container">
	<div class="row">

		<?php
		$path = 'lectures/Module1/';
		module_col('Lecture 1', 'Introduction to CyberSecurity.',  $path.'LEC1-Introduction to CyberSecurity.pptx');
		module_col('Lesson Plan 1', 'Introduction to CyberSecurity.' ,$path.'LP1-Introduction to CyberSecurity.docx')
		
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
            <a href="'.$mod_link.'" download class="btn btn-sm btn-primary"> VIEW</a>
			
        </div>
      </div>
    </div>';
 }
?>

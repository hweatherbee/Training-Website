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
		$path = '/modules';
		
		module_col('Module 1', 'Introduction to CyberSecurity.', 'mod1');
		module_col('Module 2', 'Digital Forensics and Steganography','mod2');
		module_col('Module 3', 'Cryptography.', 'mod03');
		module_col('Module 4', 'Student Engagement and Lesson Plan Design.', 'mod4');
		module_col('Module 5', 'Privacy, Intellectual Property, Laws and Ethics.', 'mod5');
		module_col('Module 6', 'CyberSecurity Challenges and Competitions.', 'mod6');
		module_col('Module 7', 'Protection Mechanisms.', 'mod7');
		module_col('Module 8', 'Online Safety Practices and Threats.', 'mod8');
		module_col('Module 9', 'Vulnerability Assessment and System Hardening.', 'mod9');
		module_col('Module 10','Internet of Things.', 'mod10');
		
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
          <a href="'.$mod_link.'.php" class="btn btn-primary">View</a>
        </div>
      </div>
    </div>';
 }
?>

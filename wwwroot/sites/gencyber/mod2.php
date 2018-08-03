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
		$path = 'lectures/Module2/';
		module_col('Lecture 2', 'Digital Forensics and Steganography.',  $path.'LEC2-Digital Forensics Steganography.pptx');
		module_col('Lesson Plan 2', 'Digital Forensics and Steganography.' ,$path.'LP2-Digital Forensics Steganography.pdf');
		module_col('Lecture 2 Lab 1', 'Introduction to CyberSecurity.', $path.'LEC2_Lab1.zip');
		module_col('Lecture 2 LAB 2', 'Digital Forensics and Steganography.', $path.'LEC2_Lab2_USB_Steg.zip');
		module_col('Lecture 2 LAB 2 SOLUTION', 'LEC 2 LAB 2 SOLUTION', $path.'LEC2-Lab2_USB_Steg SOLUTION.pdf');
		
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

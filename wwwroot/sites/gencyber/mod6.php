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
		$path = 'lectures/Module6/';
		module_col('Lecture 6', 'CyberSecurity Challenges Competitions', $path.'LEC6-CyberSecurity Challenges Competitions.pptx');
		module_col('Lesson Plan 6', 'CyberSecurity Challenges Competitions', $path.'LP6-CyberSecurity Challenges Competitions.pptx.pdf');
		module_col('Virtual Box', 'CyberSecurity Challenges Competitions', $path.'How to Download VirtualBox_V2.pdf');
		module_col('QR CODES', 'CyberSecurity Challenges Competitions', $path.'QR_codes.zip');
		module_col('Letter Sample', 'CyberSecurity Challenges Competitions', $path.'LetterSample.pdf');
		module_col('Redacted', 'CyberSecurity Challenges Competitions', $path.'Redacted.pdf');
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

<?php
   include('session.php');
   require('templateTop.php');
?>

   
   
   <body>
		<div class="container">
			<div class="jumbotron text-center">
				<h1>Welcome, <?php echo $login_session; ?>!</h1> 
			</div>
		  <h2><a href = "logout.php">Sign Out</a></h2>
		</div>
   </body>
   
</html>
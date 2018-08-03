<?php 
require ('../templateTop.php');
require ('../config.php');

if(isset($_GET['i'])){
	$urlArray = explode('-', $_GET['i']);
	$id = $urlArray[0];
	$dbName = $urlArray[1];
}

if(isset($_POST['tempPass'])){
	$queryUsers = 'SELECT email FROM '.$dbName.' WHERE id = '.$id.' LIMIT 1';
	$prepared1 = $db->prepare($queryUsers);
	$prepared1->execute();
	$userEmail = $prepared1->fetch();



	$sql = 'UPDATE '.$dbName. ' SET password = :temp WHERE id = :id';
	$prepared = $db->prepare($sql);
	$prepared->bindParam(":temp", $_POST['tempPass']);
	$prepared->bindParam(":id", $id);
	if($prepared->execute()){
		//query to get user email before
		$to = 'hcronan@stu.jsu.edu'; // change to user email after testing
		$subject = 'Forgot Password Reset';
		$headers = "From: jsu.cs.training.webmail@gmail.com" . "\r\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$txt = '<html> <body>Your password has been reset. <br /> Your temporary password is <strong>'.$_POST['tempPass'].'</strong></body></html>';
		if(mail($to,$subject,$txt,$headers)){
			//echo 'ok';
		}
		else {
			$errorMessage = error_get_last()['message'];
			echo $errorMessage;
		}

	}


}
?>

<div class="container">
	<form action="" method="POST">
		<div class="form-group">
		    <label for="tempPass">Enter Temporary Password:</label>
		    <input type="text" class="form-control" id="tempPass" name="tempPass" placeholder="">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>



<?php
require ('templateTop.php');
require ('config.php');

$dbName = '';
$type = '';

if(isset($_GET['i'])){
	$type = $_GET['i'];
}
if($type == 'gencyber'){
	$dbName = 'gencyber';
} 
else if($type == 'ics'){
	$dbName = 'icsusers';
}
else if ($type == 'cnap'){
	$dbName = 'cnapusers';
}

if(isset($_POST['userEmail'])){
	$sql = "SELECT * FROM ".$dbName." WHERE email = :email";
	$prepared = $db->prepare($sql);
	$prepared->bindParam(":email", $_POST['userEmail']);
	$prepared->execute();
	$found = $prepared->fetch();

	$url = uniqid($found['id'].'-'.$dbName.'-');
	if($found > 0){
		
		$to = 'hcronan@stu.jsu.edu';
		$subject = 'Forgot Password Request';
		$headers = "From: jsu.cs.training.webmail@gmail.com" . "\r\n";
		$headers .= "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		$txt = '<html> <body>User has requested a new password. Follow this link to set a temporary password. <br /> <a href="http://192.168.10.56/manage/resetPassword.php/?i='.$url.'">Click Here</a></body></html>';
		if(mail($to,$subject,$txt,$headers)){
			echo 'ok';
		}
		else {
			$errorMessage = error_get_last()['message'];
			echo $errorMessage;
		}
	}
	else{
		echo 'email not found';die();
	}
}
?>

<div class="container">
	<form action="" method="POST">
		<h1>Enter your email and you will be emailed a temporary password.</h1>
		<div class="form-group">
		    <label for="userEmail">Enter Email:</label>
		    <input type="email" class="form-control" id="userEmail" name="userEmail" placeholder="">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>


<?php 
require ('../templateTop.php');
require ('../config.php');

session_start();
if(isset($_SESSION['userId'])){
	$id = $_SESSION['userId'];
}
else{
	echo 'no user id';
}
if(isset($_SESSION['userType'])){
	if($_SESSION['userType'] == 'gencyber'){
		$dbName = 'gencyber';
	}elseif($_SESSION['userType'] == 'cnap'){
		$dbName = 'cnapusers';
	}elseif($_SESSION['userType'] == 'ics'){
		$dbName = 'icsusers';
	}
}
else{
	echo 'no user type';
}
	

$successMsg = '';
if(isset($_POST['newPass'])){
	$sql = "SELECT * FROM ".$dbName." WHERE id = :id";
	$prepared = $db->prepare($sql);
	$prepared->bindParam(":id", $id);
	$prepared->execute();
	$found = $prepared->fetch();
	$currentPassword = $found['password'];
	if($currentPassword != $_POST['currentPass']){
		$successMsg = '<div class="alert alert-danger" role="alert">The current password you entered was incorrect.</div>';
	}
	else{
		$sql = 'UPDATE '.$dbName. ' SET password = :temp WHERE id = :id';
		$prepared = $db->prepare($sql);
		$prepared->bindParam(":temp", $_POST['newPass']);
		$prepared->bindParam(":id", $id);
		if($prepared->execute()){
			//query to get user email before
			$successMsg = '<div class="alert alert-success" role="alert">Your password has been updated.</div>';

		}
	}


}
?>

<div class="container">
<?=$successMsg?>
	<form action="" method="POST">
		<div class="form-group">
		    <label for="currentPass">Enter Current Password:</label>
		    <input type="text" class="form-control" id="currentPass" name="currentPass" placeholder="">
		</div>
		<div class="form-group">
		    <label for="newPass">Enter New Password:</label>
		    <input type="text" class="form-control" id="newPass" name="newPass" placeholder="">
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
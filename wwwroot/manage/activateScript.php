<?php

require ('../config.php');

if(isset($_POST['activateICS'])){
	foreach ($_POST['activateICS'] as $one){
		try{
			$oneArray = explode('-', $one);
			$id = $oneArray[1];
			$updateSql = "UPDATE icsusers SET active = 1 WHERE id = ".$id;
			$updatePrepare = $db->prepare($updateSql);
			$updatePrepare->execute();
		}
		catch(Exception $e){
			header('Location: /manage/activate.php/?y=error');
			echo '<div class="alert alert-danger" role="alert">There was an error activating the accounts. '.$e.'</div>';
		}
	}
}
if(isset($_POST['activateCNAP'])){
	foreach ($_POST['activateCNAP'] as $one){
		try{
			$oneArray = explode('-', $one);
			$id = $oneArray[1];
			$updateSql = "UPDATE cnapusers SET active = 1 WHERE id = ".$id;
			$updatePrepare = $db->prepare($updateSql);
			$updatePrepare->execute();
		}
		catch(Exception $e){
			header('Location: /manage/activate.php/?y=error');
			echo '<div class="alert alert-danger" role="alert">There was an error activating the accounts. '.$e.'</div>';
		}
	}
}
if(isset($_POST['activategc'])){
	foreach ($_POST['activategc'] as $one){
		try{
			$oneArray = explode('-', $one);
			$id = $oneArray[1];
			$updateSql = "UPDATE gencyber SET active = 1 WHERE id = ".$id;
			$updatePrepare = $db->prepare($updateSql);
			$updatePrepare->execute();
		}
		catch(Exception $e){
			header('Location: /manage/activate.php/?y=error');
			echo '<div class="alert alert-danger" role="alert">There was an error activating the accounts. '.$e.'</div>';
		}
	}
}

header('Location: /manage/activate.php/?y=success');

?>
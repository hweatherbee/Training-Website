<?php
require ('../config.php');
require ('../templateTop.php');
session_start();
$url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$url = explode('/', $url);

if(!isset($_SESSION['adminUsername'])){
	header('location: /manage/login.php/');
	exit();
}

if(isset($_GET['id'])){
	$id = $_GET['id'];
}
else {
	$id = '';
}
$sql = "SELECT * FROM icsusers WHERE active = 0";
$sqlprepared = $db->prepare($sql);
$sqlprepared->execute();
$icsInactive = $sqlprepared->fetchAll();

$sql2 = "SELECT * FROM gencyber WHERE active = 0";
$sqlprepared2 = $db->prepare($sql2);
$sqlprepared2->execute();
$gencyberInactive = $sqlprepared2->fetchAll();

$sql3 = "SELECT * FROM cnapusers WHERE active = 0";
$sqlprepared3 = $db->prepare($sql3);
$sqlprepared3->execute();
$cnapInactive = $sqlprepared3->fetchAll();


if(isset($_GET['y']) && $_GET['y'] == 'success'){
	echo '<div class="alert alert-success" role="alert">You successfully activated the accounts.</div>';
}
if(isset($_GET['y']) && $_GET['y'] == 'error'){
	echo '<div class="alert alert-danger" role="alert">There was an error activating the accounts.</div>';
}

?>

<div class="container">
<form action="/manage/activateScript.php/" method="POST">
<h1>ICS Inactive Users</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	
	<?php
		$count = 0;
		foreach ($icsInactive as $user){
			$count++;
			echo '<tr><th scope="row">'.$count.'</th><td>'.$user['userfirstname'].'</td><td>'.$user['userlastname'].'</td><td>'.$user['email'].'</td><td><div class="custom-control custom-checkbox"><input type="checkbox" name="activateICS[]" class="custom-control-input" id="ics'.$user['id'].'" value="ics-'.$user['id'].'"><label class="custom-control-label" for="ics'.$user['id'].'"></label></div></td></tr>';
		}
   ?>
  </tbody>
</table>


<button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="" method="POST">
<h1>CNAP Inactive Users</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	
	<?php
		$count = 0;
		foreach ($cnapInactive as $user){
			$count++;
			echo '<tr><th scope="row">'.$count.'</th><td>'.$user['userfirstname'].'</td><td>'.$user['userlastname'].'</td><td>'.$user['email'].'</td><td><div class="custom-control custom-checkbox"><input type="checkbox" name="activateCNAP[]" class="custom-control-input" id="cnap'.$user['id'].'" value="cnap-'.$user['id'].'"><label class="custom-control-label" for="cnap'.$user['id'].'"></label></div></td></tr>';
		}
   ?>
  </tbody>
</table>


<button type="submit" class="btn btn-primary">Submit</button>
</form>

<form action="" method="POST">
<h1>GenCyber Inactive Users</h1>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
	  <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
	
	<?php
		$count = 0;
		foreach ($gencyberInactive as $user){
			$count++;
			echo '<tr><th scope="row">'.$count.'</th><td>'.$user['userfirstname'].'</td><td>'.$user['userlastname'].'</td><td>'.$user['email'].'</td><td><div class="custom-control custom-checkbox"><input type="checkbox" name="activategc[]" class="custom-control-input" id="gc'.$user['id'].'" value="gc-'.$user['id'].'"><label class="custom-control-label" for="gc'.$user['id'].'"></label></div></td></tr>';
		}
   ?>
  </tbody>
</table>


<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>